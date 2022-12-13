<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Add route group for admin with middleware auth and role admin
Route::group(['middleware' => ['auth', 'role:admin']], static function () {
    // Add route for admin logout
});

// Add route for admin dashboard
Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');

// Add route for admin login
Route::get('/admin/login', [AuthController::class, 'login'])->name('login');

// Add route for admin verify login
Route::post('/admin/login/verify', [AuthController::class, 'verify'])->name('verify');


/**
 * Add routes for admin Blog
 */
Route::get('/admin/blog', [BlogController::class, 'index'])->name('admin.blog.index');

// Add route for admin blog create/edit
Route::get('/admin/blog/{id}', [BlogController::class, 'update'])->name('admin.blog.update');

/**
 * Add routes for admin Pages
 */
Route::get('/admin/pages', [PagesController::class, 'index'])->name('admin.pages.index');
