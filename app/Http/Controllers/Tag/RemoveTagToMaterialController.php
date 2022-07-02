<?php

namespace App\Http\Controllers\Tag;

use App\Http\Requests\Tag\AppendRequest;
use App\Models\Material;
use App\Models\MaterialTag;

class RemoveTagToMaterialController extends BaseController
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\Tag\AppendRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(AppendRequest $request, Material $material)
  {
    $data = $request->validated();

    $material->tags()->detach($data['tag_id']);

    return redirect()->route('view-material', $material);
  }
}
