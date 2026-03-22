<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function() {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Zunedi Sinambela',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ducimus impedit quibusdam corrupti, quaerat dolorum atque deserunt similique temporibus nostrum dolorem eum qui dicta maxime provident distinctio voluptate eius repudiandae.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Zunedi Sinambela',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur rerum impedit consequatur, molestiae similique magnam iste. Cum officiis voluptatibus pariatur nam impedit ut. Possimus velit rem, veritatis sed est deserunt?'
        ]
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Zunedi Sinambela',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ducimus impedit quibusdam corrupti, quaerat dolorum atque deserunt similique temporibus nostrum dolorem eum qui dicta maxime provident distinctio voluptate eius repudiandae.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Zunedi Sinambela',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur rerum impedit consequatur, molestiae similique magnam iste. Cum officiis voluptatibus pariatur nam impedit ut. Possimus velit rem, veritatis sed est deserunt?'
        ]
    ];

    $post = Arr::first($posts, function($post) use($slug){
        return $post['slug'] == $slug;
    });

    if(!$post) abort(404);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function() {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function() {
    return view('contact', ['title' => 'Contact Us']);
});
