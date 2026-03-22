<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function() {
    $posts = [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Zunedi Sinambela',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ducimus impedit quibusdam corrupti, quaerat dolorum atque deserunt similique temporibus nostrum dolorem eum qui dicta maxime provident distinctio voluptate eius repudiandae.'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Zunedi Sinambela',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur rerum impedit consequatur, molestiae similique magnam iste. Cum officiis voluptatibus pariatur nam impedit ut. Possimus velit rem, veritatis sed est deserunt?'
        ]
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/about', function() {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function() {
    return view('contact', ['title' => 'Contact Us']);
});
