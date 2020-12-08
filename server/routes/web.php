<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ShopController@index');
Route::get('/mypage/like', 'ShopController@myLikes')->middleware('auth');
Route::post('/mypage/like', 'ShopController@addMylikes')->middleware('auth');
Route::post('/mypage/like/delete', 'ShopController@deleteMylikes')->middleware('auth');
