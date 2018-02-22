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



// WEB
Route::get('test_list',             'Web\PageController@test_list')->name('test_list');
Route::get('question_tests/{id}',   'Web\PageController@question_tests')->where(["id" => "[0-9]+"])->name('question_tests');
Route::get('user_questions/{id}',   'Web\PageController@user_questions')->where(["id" => "[0-9]+"])->name('user_questions');


// ADMIN
route::resource('tests',                'Admin\TestController');
route::resource('questions',            'Admin\QuestionController');
route::resource('answers',              'Admin\AnswerController');
route::get('all_tests_list',            'Admin\TestController@index_all')->name('all_tests_list');
route::get('all_questions_list',        'Admin\QuestionController@index_all')->name('all_questions_list');
route::get('all_answers_list',          'Admin\AnswerController@index_all')->name('all_answers_list');
Route::get('test/{id}/questions',       'Admin\TestController@show_questions_test')->where(["id" => "[0-9]+"])->name('questions_test');
Route::get('test/{id}/show_questions',  'Admin\TestController@show_questions_to_test')->where(["id" => "[0-9]+"])->name('show_questions_to_add');
Route::Post('test/{test_id}/add_question/{quest_id}',   'Admin\TestController@add_questions_to_test')->where(["test_id" => "[0-9]+", "quest_id" => "[0-9]+"])->name('add_questions_to_test');