<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Jovandry',
        'email' => 'jovandry@.com',
        'img' => 'profile2.jpg'
    ]);
});


Route::get('/post', [PostController::class, 'index']);

Route::get('post/{post:slug}', [PostController::class, 'show']);
