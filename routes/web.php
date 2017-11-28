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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact',[ 
	'uses' => 'ContactController@contact',
    'as' => 'contact'
]);     