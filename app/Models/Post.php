<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
  use HasFactory;

  // boleh di isi
  protected $fillable = ['title', 'author', 'slug', 'body'];

  // tidak boleh di isi
  // protected $guarded = ['id'];

  public function author(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }
}
