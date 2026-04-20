<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('_homeradio/pages/homepage');
});

Route::get('homepage', function () {
    return view('_homeradio/pages/homepage');
});


Route::get('programme-page', function () {
    return view('_homeradio/pages/programme-page');
});

Route::get('about-us-page', function () {
    return view('_homeradio/pages/about-us-page');
});

Route::get('homecast-page', function () {
    return view('_homeradio/pages/homecast-page');
});

Route::get('contact-page', function () {
    return view('_homeradio/pages/contact-page');
});

Route::get('hometrack-page', function () {
    return view('_homeradio/pages/hometrack-page');
});

Route::get('producers-page', function () {
    return view('_homeradio/pages/producers-page');
});

Route::get('single-producer', function () {
    return view('_homeradio/pages/single-producer');
});

Route::get('contests-page', function () {
    return view('_homeradio/pages/contests-page');
});

Route::get('calendar-page', function () {
    return view('_homeradio/pages/calendar-page');
});

Route::get('single-calendar-event', function () {
    return view('_homeradio/pages/single-calendar-event');
});

Route::get('single-homecast', function () {
    return view('_homeradio/pages/single-homecast');
});

Route::get('single-hometrack', function () {
    return view('_homeradio/pages/single-hometrack');
});

Route::get('terms-page', function () {
    return view('_homeradio/pages/terms-page');
});
