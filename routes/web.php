<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin', [AuthController:: class,'login'])->name('admin.login');
Route::get('admin/dashboard', [AuthController:: class,'admin_dashboard'])->name('admin.dashboard');
Route::get('admin/list', [AuthController:: class,'admin_list'])->name('admin.list');

// Route::get('admin', function () {
//     return view('admin.auth.login');
// });

// Route::get('admin/dashboard', function () {
//     return view('admin.dashboard');
// });

