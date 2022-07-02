<?php

namespace App\Http\Controllers\Tag;

use App\Http\Requests\Tag\UpdateRequest;
use App\Models\Tag;

class UpdateController extends BaseController
{
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Tag  $tag
   * @return \Illuminate\Http\Response
   */
  public function __invoke(UpdateRequest $request, Tag $tag)
  {
    $data = $request->validated();
    $this->service->update($tag, $data);

    return redirect()->route('list-tag');
  }
}
