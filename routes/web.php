<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/media-room', function () {
    return view('media-room');
});

// about us

Route::get('/factsheets', function () {
    return view('about-us/factsheets');
});

Route::get('/organisation-charts', function () {
    return view('about-us/organisation-charts');
});

// our services

Route::get('/announcement', function () {
    return view('our-services/announcement');
});

Route::get('/traffic-lights', function () {
    return view('our-services/traffic-lights-monitoring');
});

Route::get('/emergency-response', function () {
    return view('our-services/emergency-response');
});
