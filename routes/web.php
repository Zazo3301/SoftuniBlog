<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

Route::get('/', function () {
    return view('posts.home')->with('posts', Post::all());
});
Route::get('post.show/{id?}', function () {
    return view('posts.show/{id?}');
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

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::prefix('admin')->group(function() {
    Route::get('/admin', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/admin', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/logout', 'Auth\LogoutController@logout');

Route::get('admin', function () {
    return view('auth.admin-login');
});


