<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['owner' => 'Muhammad Syaekhoni']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'All Articles', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->get()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Detail Article', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => count($user->posts) . ' Articles By ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => count($category->posts) . ' Articles in ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('/contact');
});
