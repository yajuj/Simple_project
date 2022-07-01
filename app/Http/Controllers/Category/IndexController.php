<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
  /**
   * Provision a new web server.
   *
   * @return \Illuminate\Http\Response
   */
  public function __invoke()
  {
    $categories = Category::all();
    return view('list-category', compact('categories'));
  }
}
