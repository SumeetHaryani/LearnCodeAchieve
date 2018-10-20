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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('/create/course', [
    'uses'=>'CourseController@createCourse'
]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/course/add', [
    'uses'=>'CourseController@courseAdd'
]);
// Route::get('/forum', [
//     'uses'=>'ForumController@forum'
// ]);
Route::get('/courses', [
    'uses'=>'CourseController@courses'
]);
Route::get('/aboutUs', [
    'uses'=>'AboutUsController@aboutUs'
]);

Route::resource('posts', 'PostsController');
Auth::routes();
Route::resource('/post/{post_id}/comments','CommentsController');