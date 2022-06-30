<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'links';
  protected $guarded = [];

  public function book()
  {
    return $this->BelongsTo(Book::class);
  }
}
