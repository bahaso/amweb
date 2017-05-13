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
    return view('home.index');
});

Route::get('/event', function () {
    return view('event.index');
});

Route::get('/event/detail', function () {
    return view('event.detail');
});

Route::get('/vti/about', function () {
    return view('vti.index');
});

Route::get('/about/imf', function () {
    return view('about.imf');
});

Route::get('/contact-us', function () {
    return view('contact-us.index');
});

// Route::get('/vti/about/{locale}', function ($locale) {
//     App::setLocale($locale);
//     return view('vti.about');
// });

