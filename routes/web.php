<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
    return view('welcome');
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
