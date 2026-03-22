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
  }

  public static function find($slug)
  {
    // return Arr::first(static::all(), function ($post) use ($slug) {
    //   return $post['slug'] == $slug;
    // });

    return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
  }
}
