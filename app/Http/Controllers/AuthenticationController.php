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
            return redirect('/admin');
        } else {
            return back()->with('error', 'Tên đăng nhập hoặc mật khẩu không đúng');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
?>
