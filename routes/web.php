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

