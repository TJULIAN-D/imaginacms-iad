<?php

namespace Modules\Iad\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AccessValidator extends Component
{
  public $view;
  public $item;
  public $allowPrivateMedia;

  public function mount($item, $view)
  {
    $this->item = $item;
    $this->view = $view;
    $this->allowPrivateMedia = $this->item->allowPrivateMedia();
  }

  public function refreshAdContent()
  {
    $this->allowPrivateMedia = $this->item->allowPrivateMedia();
  }

  /*
  * Render
  *
  */
  public function render()
  {
    return view($this->view);
  }
}
