<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class EditController extends Controller
{
  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Tag $tag
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Tag $tag)
  {
    return view('tag.edit', compact('tag'));
  }
}
