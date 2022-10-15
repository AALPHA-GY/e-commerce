<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
  //Login page
  public function loginPage(){
    $pageConfigs = ['bodyCustomClass'=> 'bg-full-screen-image'];
    return view('pages.auth-login',['pageConfigs' => $pageConfigs]);
  }

  public function login(){
    $this->validate(request(), [
      'email' => "required",
      'password' => "required"
    ]);
    $veriables = [
      "email" => request()->get('email'),
      "password" => request()->get('password'),
    ];
    $remember = request()->get('remember');
    if (auth()->attempt($veriables, $remember)) {
      return redirect()->route('dashboard-ecommerce');
    } else {
      return back()->withInput()->withErrors(['email' => 'Giriş hatalı']);
    }
  }

  public function logout()
  {
    auth()->logout();
    request()->session()->flush();
    request()->session()->regenerate();

    return redirect()->route('auth-login');
  }

  //Register page
  public function registerPage(){
    $pageConfigs = ['bodyCustomClass'=> 'bg-full-screen-image'];
    return view('pages.auth-register',['pageConfigs' => $pageConfigs]);
  }
   //forget Password page
   public function forgetPasswordPage(){
    $pageConfigs = ['bodyCustomClass'=> 'bg-full-screen-image'];
    return view('pages.auth-forgot-password',['pageConfigs' => $pageConfigs]);
  }
   //reset Password page
   public function resetPasswordPage(){
    $pageConfigs = ['bodyCustomClass'=> 'bg-full-screen-image'];
    return view('pages.auth-reset-password',['pageConfigs' => $pageConfigs]);
  }
   //auth lock page
   public function authLockPage(){
    $pageConfigs = ['bodyCustomClass'=> 'bg-full-screen-image'];
    return view('pages.auth-lock-screen',['pageConfigs' => $pageConfigs]);
  }
}
