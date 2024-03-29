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



//2019.12.10　カリキュラム9で出てきた（最初はwelecomeに飛ぶ感じだった）
Route::get('/', 'TasksController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('tasks', 'TasksController');
    Route::resource('users', 'UsersController',['only'=>['index','show']]);
});

//以下は全てresourceに含まれている内容
//CRUD
// タスクの個別詳細ページ表示
//Route::get('tasks/{id}', 'TasksController@show');
// タスクの新規登録を処理
//Route::post('tasks', 'TasksController@store');
//　タスクの更新処理
//Route::put('tasks/{id}', 'TasksController@update');
//　タスクの削除
//Route::delete('tasks/{id}', 'TasksController@destroy');

//　indexはshowの補助ページ
//Route::get('tasks', 'TasksController@index')->name('tasks.index');
// createは新規作成用フォームページ
//Route::get('tasks/create', 'TasksController@create')->name('tasks.create');
//　editは更新用のフォームページ
//Route::get('takes/{id}/edit', 'TasksController@edit')->name('tasks.edit');

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');