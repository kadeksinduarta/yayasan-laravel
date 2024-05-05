<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home' ]);
});

Route::get('/what-we-do', function () {
    return view('what-we-do',['title' => 'What We Do' ]);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact' ]);
});

Route::get('/schedule', function () {
    return view('schedule', ['title' => 'Schedule' ]);
});
