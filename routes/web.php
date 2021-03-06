<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;

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
//Route::get('/', [HomeController::class, 'index']);

Route::get('/', action: 'HomeController@index')->name('home');

// Route::get('/category/{slug}/{/id}',[
//     'as' => category.product,
//     'use' => 'CategoryController@index'
// ]);

Route::get('/register', [
    RegisterController::class, 'index'
])->name('register');
Route::post('/register', [
    RegisterController::class, 'store'
]);

Route::get('/login', [
    LoginController::class, 'index'
])->name('login');
Route::post('/login', [
    LoginController::class, 'store'
]);

Route::get('/logout', [
    LogoutController::class, 'store'
])->name('logout');

Route::get('/blog', action: 'BlogController@blog')->name('blog');

Route::get('/contact', action: 'ContactController@contact')->name('contact');

Route::get('/category/{id}',[
    'as' => 'category.product',
    'uses' => 'CategoryController@index'
]);