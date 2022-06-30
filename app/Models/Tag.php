<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'tags';
  protected $guarded = [];

  public function books()
  {
    return $this->belongsToMany(Book::class, 'book_tags', 'tag_id', 'book_id');
  }
}
