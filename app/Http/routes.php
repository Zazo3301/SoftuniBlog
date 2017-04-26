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




Route::get('/', function () {
    return view('layouts.home');
});


Route::get('users/{id?}', function ($id = null) {
    return view('layouts.users');
});






Route::get('videos/{genrename?}', function ($genrename = null) {
    return view('layouts.videos');
});




Route::get('lyrics', function () {
    return view('layouts.lyrics');
});

Route::get('admin', function () {
    return view('admin.main-admin');
});

Route::get('def', function () {
    return view('layouts.default');
});

Route::get('news', function () {
    return view('layouts.news');
});

Route::get('admin/edit-posts', function () {
    return view('admin/edit-posts');
});

Route::get('admin/categories', function () {
    return view('admin/categories');
});

Route::get('admin/edit-users', function () {
    return view('admin/edit-users');
});

Route::get('admin/settings', function () {
    return view('admin/settings');
});

Route::get('posts/create', function () {
    return view('posts.create');
});
Route::resource('posts', 'PostController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('posts', 'PostController');

