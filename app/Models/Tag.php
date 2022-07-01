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
  public $timestamps = false;

  public function materials()
  {
    return $this->belongsToMany(Material::class, 'material_tags', 'tag_id', 'material_id');
  }
}
