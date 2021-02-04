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

use App\Http\Controllers\UserController;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'UserController@index');
Route::get('/detail/{id}', 'UserController@showDetail')->name('show');

Route::group(['middleware' => 'auth'], function () {

    //ユーザー情報ルート
    Route::get('/sell', 'UserController@sell');
    Route::post('/sell', 'UserController@addSell');
    Route::get('/mypage', 'UserController@myPage');
    Route::get('/mypage/like', 'UserController@myLikes');
    Route::post('/mypage/like', 'UserController@addMylikes');
    Route::post('/mypage/like/delete', 'UserController@deleteMylikes');
    Route::get('/mypage/sell/now', 'UserController@sellNow');
    Route::get('/mypage/sell/trade', 'UserController@sellTrade');
    Route::get('/mypage/sell/end', 'UserController@sellEnd');
    Route::get('/mypage/bid/now', 'UserController@bidNow');
    Route::get('/mypage/bid/trade', 'UserController@bidTrade');
    Route::get('/mypage/bid/end', 'UserController@bidEnd');

    //プロフィールルート
    Route::get('/profile', 'UserController@profile');
    Route::post('/profile', 'UserController@changeProfile');
    Route::get('/profile/send', 'UserController@send');
    Route::post('/profile/send', 'UserController@addSend');
    Route::get('/profile/pay', 'UserController@pay');
    Route::get('/profile/mail', 'UserController@mail');
    Route::get('/profile/logout', 'UserController@logout');

    //オークション関連ルート
    Route::get('/sell/auction', 'AuctionController@index');
});
