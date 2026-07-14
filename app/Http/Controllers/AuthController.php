<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function admin_login()
    {
        if(!empty(Auth::user()) && Auth::user()->is_admin == 1){
            return redirect('admin/dashboard');
        }   
        return view('admin.auth.login');
    }

    public function admin_login_submit(Request $request)
    {
        $remember = $request->has('remember') ? true : false;
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $remember) && Auth::user()->is_admin == 1) {
            // Authentication passed...
            return redirect('admin/dashboard');
        } else {
            // Authentication failed...
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }


    public function admin_dashboard()
    {

         return view('admin.dashboard');
    }
     public function admin_list(){
        return view('admin.list');
     }
     public function admin_logout(Request $request)
    {
        Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect('admin');
    }

}
