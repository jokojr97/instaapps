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
    return redirect('/login');
});

Auth::routes();


Route::namespace('admin')->prefix('admin')->name('admin.')->middleware('auth', 'can:role-admin')->group(function(){
	Route::get('/dashboard', [UsersController::class, 'index'])->name('dashboard.index');	
	Route::post('/post', [UsersController::class, 'store'])->name('post.store');	
	Route::get('/post/{post}', [UsersController::class, 'show'])->name('post.detail');	
	Route::post('/commentstore', [UsersController::class, 'commentstore'])->name('post.commentstore');	
	Route::post('/like', [UsersController::class, 'like'])->name('post.like');	
	Route::post('/unlike', [UsersController::class, 'unlike'])->name('post.unlike');	
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
