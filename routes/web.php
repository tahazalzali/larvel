<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::get('/home',function(){
    return view('welcome')    ;
});
Route::get('/index',function(){
    return view('products.index');
});
Route::get('user/soft/delete/{id}','UsersControll@softDeletes')
->name('soft.delete');
Route::get('/create',function(){
return view('products.create');
});

Route::get('/taha',function(){
    return view('products.taha');
});
// Route::get('product/delete/{id}',
// 'FbPostController@softDeletes')->name('products.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/app',function(){
    return view('layouts.app');
});

//Posts Routes
Route::resource('posts','App\Http\Controllers\PostController');

Route::get('post/soft/{id}','App\Http\Controllers\PostController@softDelete')->name('soft.delete');

Route::get('post/soft','App\Http\Controllers\PostController@withTrashed')->name('soft.show');
Route::get('post/back/{id}','App\Http\Controllers\PostController@backFromsoftDelete')->name('soft.return');
Route::get('post/delete/forever/{id}','App\Http\Controllers\PostController@forceDelete')->name('final.delete');
//Profile Routes
Route::get('/profile','App\Http\Controllers\ProfileController@index')->name('profile');
Route::get('/profile/update','App\Http\Controllers\ProfileController@update')->name('profile.update');
