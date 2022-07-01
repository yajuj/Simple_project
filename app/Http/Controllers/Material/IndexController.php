<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Models\Material;

class IndexController extends Controller
{
  /**
   * Provision a new web server.
   *
   * @return \Illuminate\Http\Response
   */
  public function __invoke()
  {
    $materials = Material::all();
    return view('list-materials', compact('materials'));
  }
}
