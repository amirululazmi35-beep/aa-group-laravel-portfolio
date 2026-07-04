<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/lang/{locale}', function (string $locale) {
    if (! in_array($locale, ['ms', 'en'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    return back();
})->name('lang.switch');
