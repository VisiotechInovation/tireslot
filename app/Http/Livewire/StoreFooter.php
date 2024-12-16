<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subscribers;
use Illuminate\Database\QueryException;

class StoreFooter extends Component
{

  public $email = null;
  public $ischecked = false;
  public $session_id;
  public $timer = 0;

  public function render()
  {
    return view('livewire.store-footer');
  }


  public function timmerexpired()
  {
    $this->timer = 0;
    $this->emit('timmerexpired');
  }

  public function store()
  {
    $this->resetErrorBag();

    try {
      $validatedData = $this->validate([
        'email' => 'required|email',
      ]);

      $sucscriber = Subscribers::create($validatedData);


      $this->reset();
      $this->dispatchBrowserEvent('newsletterToggle');
    } catch (QueryException $e) {
      if ($e->errorInfo[1] === 1062) {
        $this->reset();
        $this->dispatchBrowserEvent('newsletterToggle');
      } else {
      }
    }
  }
}