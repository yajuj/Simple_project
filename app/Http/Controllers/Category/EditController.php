<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class EditController extends Controller
{
  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Category $category
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Category $category)
  {
    return view('category.edit', compact('category'));
  }
}
