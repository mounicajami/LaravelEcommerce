<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function admin_dashboard()
    {
        return view('admin.dashboard');
    }
     public function admin_list(){
        return view('admin.list');
     }

}
