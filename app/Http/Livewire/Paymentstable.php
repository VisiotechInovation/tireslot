<?php

namespace App\Http\Livewire;

use App\Models\Payment;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Schema;


class Paymentstable extends Component
{
    use WithPagination;
    public $loadAmount = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public $checked = [];
    public $selectPage = false;
    public $selectAll = false;
    public $removedid = null;
    public $tableName;
    public $columns;
    public $selectedColumns = [];
    public $editindex = null;
    public $isactive = [];
    public $row = null;

    public function expandRow($index)
    {
        if ($this->editindex === $index) {
            return;
        } else {

            if ($this->row  === null) {
                $this->row = $index;
            } elseif ($this->row != $index) {
                $this->row = $index;
            } else {
                $this->row = null;
            }
        }
    }

    public function render()
    {
        return view('livewire.paymentstable', [
            'payments' => $this->payments
        ]);
    }
    public function loadMore()
    {
        $this->loadAmount += 10;
    }
    public function mount($tableName)
    {
        $this->tableName = $tableName;
        $this->columns = Schema::getColumnListing($this->tableName);
        $this->selectedColumns = $this->columns;
    }
    public function showColumn($column)
    {
        if ($column === 'name') {
            return true;
        }
        return in_array($column, $this->selectedColumns);
    }
    public function updatedSelectPage($value)
    {
        if ($value) {
            $this->checked = $this->payments->pluck('id')->map(fn ($item) => (string) $item)->toArray();
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
        $this->checked = $this->paymentsQuery->pluck('id')->map(fn ($item) => (string) $item)->toArray();
    }
    public function getPaymentsProperty()
    {
        return Payment::search($this->search)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')->paginate($this->loadAmount);
    }
    public function deleteRecords()
    {
        $items = Payment::whereKey($this->checked)->get();

        foreach ($items as $item) {
            $del = Payment::find($item->id);
            $del->delete();
        }
        $this->selectPage = false;
        $this->checked = [];
        session()->flash('notification', [
            'message' => 'Records deleted successfully!',
            'type' => 'success',
            'title' => 'Success'
        ]);
    }
    public function deleteSingleRecord()
    {
        $item = Payment::findOrFail($this->removedid);
        $item->delete();
        $this->checked = array_diff($this->checked, [$this->removedid]);
        session()->flash('notification', [
            'message' => 'Record deleted successfully!',
            'type' => 'success',
            'title' => 'Success'
        ]);
    }
    public function confirmItemRemoval($id)
    {
        $this->removedid = $id;
        $this->dispatchBrowserEvent('show-delete-modal');
    }
    public function confirmItemsRemovalmultiple()
    {
        $this->dispatchBrowserEvent('show-delete-modal-multiple');
    }
    public function isChecked($id)
    {
        return in_array($id, $this->checked);
    }
    public function edit($index, $id)
    {
        $this->editindex = $index;
        $this->row = $index;
        $item = Payment::find($id);
        $this->isactive = [
            $index . '.active' => $item->active == 1 ? true : false,
            $index . '.description' => $item->description

        ];
    }
    public function cancel()
    {
        $this->editindex = null;
        $this->isactive = [];
    }
    public function save($index, $id)
    {
        $new = $this->isactive[$index] ?? NULL;

        if (!is_null($new)) {
            $item = Payment::find($id);
            if (array_key_exists('active', $new)) {

                $item->active = $new['active'] ? 1 : 0; // Convert true to 1 and false to 0
            }
            if (array_key_exists('description', $new)) {

                $item->description = $new['description'];
            }
            $item->save();

            session()->flash('notification', [
                'message' => 'Record edited successfully!',
                'type' => 'success',
                'title' => 'Success'
            ]);
        }

        $this->isactive = [];
        $this->editindex = null;
    }
}
