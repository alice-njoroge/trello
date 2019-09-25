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

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
//pages
Route::get('/', 'ContactController@index')->name('homme');
Route::get('/contact', 'ContactController@create')->name('contact');
Route::post('/contact', 'ContactController@store')->name('store_mail');
//projects
Route::resource('projects','ProjectController');
//tasks
Route::get('/projects/{project_id}/tasks','TaskController@index')->name('tasks');
Route::get('/projects/{project_id}/tasks/create','TaskController@create')->name('create_task');
Route::post('projects/{project_id}/tasks','TaskController@store')->name('task_store');
Route::get('projects/{project_id}/tasks/{task}','TaskController@show')->name('show_task');
Route::get('projects/{project_id}/tasks/{task}/delete','TaskController@destroy')->name('delete_task');
