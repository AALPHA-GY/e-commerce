<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
//        return view('layouts.guest');
      $pageConfigs = ['bodyCustomClass'=> 'bg-full-screen-image'];
      return view('pages.auth-login',['pageConfigs' => $pageConfigs]);
    }
}
