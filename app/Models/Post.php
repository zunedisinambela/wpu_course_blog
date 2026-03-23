<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // boleh di isi
  protected $fillable = ['title', 'author', 'slug', 'body'];

  // tidak boleh di isi
  // protected $guarded = ['id'];
}
