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

Route::get('/','PagesController@home');
Route::get('/logout','Auth\LoginController@logout');
Route::get('/post/{id}','PagesController@single');
// Add post

Route::post('/add_post','PostController@store');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// admin Page

Route::get('/admin', 'AdminController@index')->middleware('admin');
Route::post('/user_delete/{id}','AdminController@delete');
Route::get('/admin_planets','AdminController@planets')->middleware('admin');
Route::post('/post_delete/{post_id}','AdminController@post_delete');
Route::post('/post_edit/{post_id}','AdminController@edit_post');
Route::get('/post_edit/{post_id}','AdminController@post_edit');
Route::get('/draft_posts','AdminController@draft');
Route::post('/report_comment/{com_id}','AdminController@report');
Route::get('/report','AdminController@getReport');
Route::get('/category','AdminController@getCategory');
Route::post('/add_category','AdminController@storeCategory');
Route::post('/block_user/{id}','AdminController@block_user');
Route::post('/unblock_user/{id}','AdminController@unblock_user');

// Add Comment

Route::post('/add_comment/{post_id}','CommentController@store');
Route::post('/delete_comment/{com_id}','CommentController@delete');

// Comment Replay 

Route::post('/comment_replay/{com_id}', 'ReplayController@replay');

// Add Vote

Route::post('/add_vote/{id}','PostController@storeVote');
// Add Favorite

Route::post('/add_fav/{post_id}','PostController@storeFav');
Route::post('/remove_fav/{post_id}','PostController@deleteFav');

// User Private Area

Route::get('/user_profile','UsersController@index');
Route::get('/user_settings','UsersController@settings');
Route::post('/change','UsersController@change');
Route::get('/favorite','UsersController@favorite');

// Search SyStem

Route::post('/search','PostController@search');

// Notification

Route::post('/remove_one/{id}','PostController@removeOne');