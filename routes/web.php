<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UsersController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::namespace('admin')->prefix('admin')->name('admin.')->middleware('auth', 'can:role-admin')->group(function(){
	Route::get('/dashboard', [UsersController::class, 'index'])->name('dashboard.index');	
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
