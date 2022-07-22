<?php

use Illuminate\Support\Facades\Route;

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
    return view('beranda');
});

Route::get('profile.php',function() {
	return view('profile');
});

Route::get('contact-form.php', function() {
	return view('contact-form');
});

Route::post('contact', 'Contact@sendMail');
