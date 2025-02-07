<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        // Use Callback function
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        // Use Arrow function
        // return Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
