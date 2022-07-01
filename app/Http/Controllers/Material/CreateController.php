<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CreateController extends Controller
{
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function __invoke()
  {
    $types = getMaterialTypesEnum();
    $categories = Category::all();

    return view('create-material', compact('categories', 'types'));
  }
}
