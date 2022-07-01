<?php

namespace App\Services\Category;

use App\Models\Category;

class CategoryService
{

  public function getAll()
  {
    return Category::all();
  }

  public function store($data)
  {
    Category::create($data);
  }

  public function update(Category $category, array $data)
  {
    $category->update($data);
  }

  public function destroy($categoryId)
  {
    Category::destroy($categoryId);
  }
}
