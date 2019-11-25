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

Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController');
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