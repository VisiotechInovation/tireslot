<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Wishlist;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Wishliststable extends Component
{
    use WithPagination;

    public $tableName;
    public $loadAmount = 100;
    public $columns;
    public $search = '';
    public $selectedColumns;
    public $checked = [];
    public $selectPage = false;
    public $orderBy = 'id';
    public $orderAsc = true;
    public $selectAll = false;
    public $idbeingremoved = null;
    public $single = false;
    public $multiple = false;
    public $row = null;

    public function expandRow($index)
    {
        if ($this->row  === null) {
            $this->row = $index;
        } elseif ($this->row != $index) {
            $this->row = $index;
        } else {
            $this->row = null;
        }
    }

    public function render()
    {
        return view('livewire.wishliststable', [
            'wishlists' => $this->wishlists
        ]);
    }
    public function mount($tableName)
    {
        $this->tableName = $tableName;
        $this->columns = Schema::getColumnListing($this->tableName);
        $this->selectedColumns = $this->columns;
    }
    public function showColumn($column)
    {
        return in_array($column, $this->selectedColumns);
    }
    public function updatedSelectPage($value)
    {
        if ($value) {
            $this->checked = $this->wishlists->pluck('session_id')->map(fn ($item) => (string) $item)->toArray();
        } else {
            $this->checked = [];
        }
    }
    public function updatedChecked()
    {
        $this->selectPage = false;
    }
    public function sortBy($columnName)
    {

        if ($this->orderBy === $columnName) {
            $this->orderAsc = $this->swapSortDirection();
        } else {
            $this->orderAsc = '1';
        }

        $this->orderBy = $columnName;
    }
    public function swapSortDirection()
    {
        return $this->orderAsc === '1' ? '0' : '1';
    }
    public function selectAll()
    {
        $this->selectAll = true;
        $this->checked = $this->wishlists->pluck('session_id')->map(fn ($item) => (string) $item)->toArray();
    }
    public function isChecked($id)
    {
        return in_array($id, $this->checked);
    }
    public function getWishlistsProperty()
    {
        return Wishlist::select(
            'session_id',
            DB::raw('GROUP_CONCAT(product_id) as product_ids'),
            DB::raw('COUNT(*) as count'),
            DB::raw('MAX(updated_at) as latest_updated_at'),
            DB::raw('MIN(created_at) as earliest_created_at')
        )
            ->groupBy('session_id')
            ->paginate($this->loadAmount);
    }
    public function loadMore()
    {
        $this->loadAmount += 10;
    }

    public function deleteSingleRecord()
    {
        $items = Wishlist::where('session_id', $this->idbeingremoved)->get();
        foreach ($items as $item) {
            $item->delete();
        }
        $this->checked = array_diff($this->checked, [$this->idbeingremoved]);
        $this->single = false;

        session()->flash('notification', [
            'message' => 'Record deleted successfully!',
            'type' => 'success',
            'title' => 'Success'
        ]);
    }
    public function confirmItemRemoval($id)
    {
        $this->idbeingremoved = $id;
        $this->single = true;
    }
    public function confirmItemsRemoval()
    {
        $this->multiple = true;
    }
    public function cancel_delete()
    {
        $this->multiple = false;
        $this->single = false;
    }
    public function deleteRecords()
    {
        $items = Wishlist::whereIn('session_id', $this->checked)->get();
        foreach ($items as $item) {
            Wishlist::where('session_id', $item->session_id)->delete();
        }
        $this->selectPage = false;
        $this->checked = [];
        $this->multiple = false;

        session()->flash('notification', [
            'message' => 'Records deleted successfully!',
            'type' => 'success',
            'title' => 'Success'
        ]);
    }
}
