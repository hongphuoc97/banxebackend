<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function checklogin(Request $request)
    {
        $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|string|min:6'
     ]);

        $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

        if (Auth::attempt($user_data)) {
            return AuthenticationController::successlogin();
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function successlogin()
    {
        return view('welcome');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('main');
    }
}
