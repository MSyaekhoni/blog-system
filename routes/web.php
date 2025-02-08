<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['owner' => 'Muhammad Syaekhoni']);
});

Route::get('/blog', function () {
    return view('blog', ['posts' => Post::all()]);
});

Route::get('/blog/{post:slug}', function (Post $post) {
    return view('singleBlog', ['post' => $post]);
});

Route::get('/contact', function () {
    return view('/contact');
});
