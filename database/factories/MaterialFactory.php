<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Material>
 */
class MaterialFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'title' => fake()->text(10),
      'authors' => fake()->name(),
      'description' => fake()->text(300),
      'type' => Arr::random(getMaterialTypesEnum()),
      'category_id' => Category::inRandomOrder()->first()
    ];
  }
}
