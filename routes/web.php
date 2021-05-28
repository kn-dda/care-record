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

//Controllerを経由せずViewへ流し、Welcomeを表示する
Route::get('/', function () {
    return view('welcome');
});


// UsersController@showを経由してマイページを表示
Route::get('show', 'UsersController@show');

// UserConditionController@indexを経由して記録一覧ページを表示
Route::get('user_condition', 'UserConditionController@index');

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

// 認証付きルーティング（投稿）
Route::group(['middleware' => ['auth']], function () {
    Route::resource('usre_condition', 'UserConditionController');
});

// 記録の新規登録を処理(store)、登録データを削除(destroy)
Route::resource('user_condition', 'UserConditionController', ['only' => ['store', 'destroy']]);