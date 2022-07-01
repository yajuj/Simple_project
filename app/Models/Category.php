<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'categories';
  protected $guarded = [];

  public function materials()
  {
    return $this->hasMany(Material::class);
  }

  public static function boot()
  {
    parent::boot();

    static::deleting(function (Category $category) {
      $category->materials()->delete();
    });
  }
}
