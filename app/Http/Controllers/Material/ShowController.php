<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Models\Tag;

class ShowController extends Controller
{
  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Material  $material
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Material $material)
  {
    $tags = Tag::all();
    return view('material.view', compact('material', 'tags'));
  }
}
