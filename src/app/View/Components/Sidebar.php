<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Channel;
use Illuminate\Support\Facades\Auth;

class Sidebar extends Component
{
  public $user;
  public $channels;
  public $channelId;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($channelId = 0)
  {
    $this->user = Auth::user()->name;
    $this->channels = Channel::all();
    $this->channelId = $channelId;
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
