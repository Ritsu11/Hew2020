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

Route::get('/', 'UserController@index');
Route::get('/mypage', 'UserController@myPage');
Route::get('/mypage/like', 'UserController@myLikes')->middleware('auth');
Route::post('/mypage/like', 'UserController@addMylikes')->middleware('auth');
Route::post('/mypage/like/delete', 'UserController@deleteMylikes')->middleware('auth');
