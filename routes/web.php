<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['owner' => 'Muhammad Syaekhoni']);
});

Route::get('/blog', function () {
    return view('blog', ['posts' => [
        [
            'id' => 1,
            'slug' => 'article-1',
            'title' => 'Article 1',
            'author' => 'Joko Subroto',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur perferendis
            quia, expedita laudantium
            quis ipsum delectus iusto eius cumque, enim, ut nostrum distinctio officiis. Doloribus aut nostrum quasi
            nesciunt! Recusandae.'
        ],
        [
            'id' => 2,
            'slug' => 'article-2',
            'title' => 'Article 2',
            'author' => 'Mulyono',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam alias pariatur
            consectetur cumque, repellendus asperiores labore rem quos, animi sequi quibusdam ipsa voluptates eum veniam
            in perferendis ipsum amet. Fuga.'
        ]
    ]]);
});

Route::get('/blog/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'article-1',
            'title' => 'Article 1',
            'author' => 'Joko Subroto',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur perferendis
            quia, expedita laudantium
            quis ipsum delectus iusto eius cumque, enim, ut nostrum distinctio officiis. Doloribus aut nostrum quasi
            nesciunt! Recusandae.'
        ],
        [
            'id' => 2,
            'slug' => 'article-2',
            'title' => 'Article 2',
            'author' => 'Mulyono',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam alias pariatur
            consectetur cumque, repellendus asperiores labore rem quos, animi sequi quibusdam ipsa voluptates eum veniam
            in perferendis ipsum amet. Fuga.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('singleBlog', ['post' => $post]);
});

Route::get('/contact', function () {
    return view('/contact');
});
