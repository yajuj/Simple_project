<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Material;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  /**
   * Provision a new web server.
   * @param \Illuminate\Http\Request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request)
  {
    $query = $request->q;
    $tag = Tag::where('title', '=', "$query")->first();
    $tags = $tag ? $tag->materials : null;

    $category = Category::where('title', '=', "$query")->first();
    $categoryId = $category ? $category->id : null;


    $rawMaterials = Material::where('title', 'like', "%{$query}%")
      ->orWhere('authors', 'like', "%{$query}%")
      ->orWhere('category_id', '=', $categoryId)->get();

    $materials = collect($rawMaterials)->merge($tags);

    return view('material.list', compact('materials', 'query'));
  }
}
