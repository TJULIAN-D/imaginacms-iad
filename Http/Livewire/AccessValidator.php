<?php

namespace Modules\Iad\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AccessValidator extends Component
{
  public $view;
  public $item;

  public function mount($item, $view)
  {
    $this->item = $item;
    $this->view = $view;
  }

  /*
  * Render
  *
  */
  public function render()
  {
    $allowPrivateMedia = $this->item->allowPrivateMedia();
    return view($this->view, compact("allowPrivateMedia"));
  }
}
