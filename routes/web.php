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

Auth::routes();
Route::redirect('/',                                            'home');
Route::get('home',                                              'HomeController@home')->name('home');

// WEB
Route::get('test_list',                                         'Web\WebController@test_list')->name('test_list');
Route::get('take_test/{id}',                                    'Web\StudentController@show_test')->where(["id" => "[0-9]+"])->name('show_test');
Route::post('take_test/{test_id}/question/{quest_id}',          'Web\StudentController@save_taken_test')->where(["test_id" => "[0-9]+", "quest_id" => "[0-9]+"])->name('take_test');

Route::get('question_tests/{id}',                               'Web\PageController@question_tests')->where(["id" => "[0-9]+"])->name('question_tests');
Route::get('user_questions/{id}',                               'Web\PageController@user_questions')->where(["id" => "[0-9]+"])->name('user_questions');


// ADMIN
route::resource('tests',                                        'Admin\TestController');
route::resource('questions',                                    'Admin\QuestionController');
route::resource('answers',                                      'Admin\AnswerController');

route::get('all_tests_list',                                    'Admin\TestController@index_all')->name('all_tests_list');
route::get('all_questions_list',                                'Admin\QuestionController@index_all')->name('all_questions_list');
route::get('all_answers_list',                                  'Admin\AnswerController@index_all')->name('all_answers_list');

Route::get('test/{id}/questions',                               'Admin\TestController@show_questions_test')->where(["id" => "[0-9]+"])->name('questions_test');

Route::get('test/{id}/show_questions',                          'Admin\TestController@show_questions_to_test')->where(["id" => "[0-9]+"])->name('show_questions_to_add');
Route::Post('test/{test_id}/add_question/{quest_id}',           'Admin\TestController@add_questions_to_test')->where(["test_id" => "[0-9]+", "quest_id" => "[0-9]+"])->name('add_questions_to_test');

Route::get('test/{test_id}/question/{quest_id}/show_answers',   'Admin\AnswerController@show_answers_to_test')->where(["test_id" => "[0-9]+", "quest_id" => "[0-9]+"])->name('show_answers_to_add');
Route::Post('test/question/add_answer/{answer_id}',             'Admin\AnswerController@add_answers_to_test')->where(["test_id" => "[0-9]+", "quest_id" => "[0-9]+", "answer_id" => "[0-9]+"])->name('add_answers_to_test');

Route::Post('test/question/correct_answer/{id}',                'Admin\AnswerController@update_aqt_table')->where(["test_id" => "[0-9]+"])->name('select_correct_answers');
