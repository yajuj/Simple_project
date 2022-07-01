<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Material;

class EditController extends Controller
{
  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Material $material
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Material $material)
  {
    $types = getMaterialTypesEnum();
    $categories = Category::all();
    return view('edit-material', compact('material', 'categories', 'types'));
  }
}
