<?php

namespace Database\Factories;

use App\Models\Material;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MaterialTag>
 */
class MaterialTagFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'material_id' => Material::inRandomOrder()->first(),
      'tag_id' => Tag::inRandomOrder()->first()
    ];
  }
}
