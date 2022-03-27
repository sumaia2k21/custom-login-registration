<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function signup()
  {
      return view('frontent.layout.signup');
  }
  
  public function signup_post(Request $request)
  {
      User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'role'=>'customer',
        'password'=>bcrypt($request->password) ,
        'mobile'=>$request->mobile,
      ]);
      return redirect()->route('login')->with('message', 'User registration successful');
  }
  public function login()
  {
      return view('frontent.layout.login');
  }
  public function dologin(Request $request)
  {
   $credentials=$request->except('_token');
   if(Auth::attempt($credentials))
   {
    return redirect()->back();
   }
   return redirect()->route('services')->with('message', 'User login successful');
  }
  
  public function logout()
  {
      Auth::logout();
      return redirect()->route('login'); 
  }

}
