<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'books';
  protected $guarded = [];

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function links()
  {
    return $this->hasMany(Link::class);
  }

  public function tags()
  {
    return $this->belongsToMany(Tag::class, 'book_tags', 'book_id', 'tag_id');
  }
}
