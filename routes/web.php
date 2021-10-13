<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
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

Route::get('/blog', action: 'HomeController@blog')->name('blog');