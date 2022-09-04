<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Channel;
use Illuminate\Support\Facades\Auth;

class Sidebar extends Component
{
  public $user;
  public $channels;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->user = Auth::user()->name;
    $this->channels = Channel::all();
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.sidebar');
  }
}
