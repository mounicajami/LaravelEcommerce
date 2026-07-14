<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', [AuthController::class, 'admin_login'])->name('admin.login.form');
Route::post('admin', [AuthController::class, 'admin_login_submit'])->name('admin.login');
Route::get('admin/dashboard', [AuthController::class, 'admin_dashboard'])->name('admin.dashboard');
Route::get('admin/list', [AuthController::class, 'admin_list'])->name('admin.list');
Route::get('admin/logout', [AuthController::class, 'admin_logout'])->name('admin.logout');

// Route::get('admin', function () {
//     return view('admin.auth.login');
// });

// Route::get('admin/dashboard', function () {
//     return view('admin.dashboard');
// });

