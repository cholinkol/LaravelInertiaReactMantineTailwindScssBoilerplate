<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Include admin routes
require __DIR__ . '/admin.php';


Route::inertia('/', 'App');

Route::get('/home', [HomeController::class, 'index'] )->name('home');
