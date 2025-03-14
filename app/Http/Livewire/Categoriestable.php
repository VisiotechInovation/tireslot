<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Livewire\WithPagination;
use App\Models\Products_categories;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

class Categoriestable extends Component
{
  use WithPagination;
  public $loadAmount = 20;
  public $search = '';
  public $orderBy = 'id';
  public $orderAsc = true;
  public $checked = [];
  public $selectPage = false;
  public $selectAll = false;
  public $idbeingremoved = null;
  public $selectedColumns = [];
  public $columns;
  public $row = null;
  public $single = false;
  public $multiple = false;

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
    return view('livewire.categoriestable', ['categories' => $this->categories]);
  }
  public function mount($tableName)
  {
    $this->columns = Schema::getColumnListing($tableName);
    $this->selectedColumns = $this->columns;
  }

  public function showColumn($column)
  {
    return in_array($column, $this->selectedColumns);
  }
  public function updatedSelectPage($value)
  {
    if ($value) {
      $this->checked = $this->categories->pluck('id')->map(fn($item) => (string) $item)->toArray();
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
    $this->checked = $this->categoriesQuery->pluck('id')->map(fn($item) => (string) $item)->toArray();
  }
  public function getCategoriesProperty()
  {
    return $this->categoriesQuery->paginate($this->loadAmount);
  }
  public function loadMore()
  {
    $this->loadAmount += 10;
  }
  public function getCategoriesQueryProperty()
  {
    return Category::search($this->search)
      ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc');
  }
  public function deleteRecords()
  {
    $categories = Category::whereKey($this->checked)->get();
    foreach ($categories as $category) {
      $id = $category->id;
      $cattodel = Category::find($id);
      $productcat = Products_categories::where('category_id', $id)->get();
      if ($productcat != NULL) {
        foreach ($productcat as $pro) {
          $pro->delete();
        }
      }
      $subcategories = Subcategory::where('parent_id', $id)->orwhere('category_id', $id)->get();
      if ($subcategories != NULL) {
        foreach ($subcategories as $sub) {
          $sub->delete();
        }
      }
      $medias = $cattodel->media()->get();
      foreach ($medias as $media) {
        $media->delete();
      }
      $productType = class_basename(get_class($cattodel));
      $filespath = 'media/' . $productType . '/' . $cattodel->id;
      if (File::exists($filespath)) {
        File::deleteDirectory($filespath);
      }
      $cattodel->delete();
    }
    $this->checked = [];
    $this->selectPage = false;
    $this->multiple = false;

    session()->flash('notification', [
      'message' => 'Records deleted successfully!',
      'type' => 'success',
      'title' => 'Success'
    ]);
  }
  public function deleteSingleRecord()
  {
    $id = $this->idbeingremoved;
    $category = Category::findOrFail($id);
    $productcats = Products_categories::where('category_id', $id)->get();

    if ($productcats != NULL) {
      foreach ($productcats as $productcat) {

        $productcat->delete();
      }
    }
    $subcategories = Subcategory::where('parent_id', $id)->get();
    if ($subcategories != NULL) {
      foreach ($subcategories as $sub) {
        $sub->delete();
      }
    }
    $productType = class_basename(get_class($category));
    $filespath = 'media/' . $productType . '/' . $category->id;
    if (File::exists($filespath)) {
      File::deleteDirectory($filespath);
    }
    $medias = $category->media()->get();
    foreach ($medias as $media) {
      $media->delete();
    }
    $category->delete();
    $this->checked = array_diff($this->checked, [$id]);
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
  public function isChecked($id)
  {
    return in_array($id, $this->checked);
  }
}