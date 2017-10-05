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

    $tasks = DB::table('tasks')->get();

    $posts  = \App\Post::all();

    return view('posts.index', compact('tasks', 'posts'));
});

//login
Route::get('/login', function(){
    return view('layouts.app');
});

//Task
Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

//Posts
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');

//processing form
Route::post('/posts/store', 'PostsController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
