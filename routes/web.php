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

Route::redirect('/', 'test_list');

Auth::routes();

Route::get('test_list', 'Web\PageController@test_list')->name('test_list');
Route::get('test/{id}', 'Web\PageController@test')->name('test');
Route::get('question_tests/{id}', 'Web\PageController@question_tests')->name('question_tests');
Route::get('user_questions/{id}', 'Web\PageController@user_questions')->name('user_questions');




Route::get('/test/create', 'TestController@show');
