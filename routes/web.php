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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/welcome1', function () {
//     return view('welcome1');
// });

// Route::get('/','HomeController@home');
// Route::get('/register','AuthController@register');
// Route::get('/welcome1','AuthController@welcome1');

// Route::get('/', function() {
// 	return view('adminlte.master');
// });

// Route::get('/', function() {
// 	return view('adminlte.item.index');
// });


Route::get('/', function() {
	return view('tugasBlade.halaman1');
});

Route::get('/data-table', function() {
	return view('tugasBlade.data-table');
});

