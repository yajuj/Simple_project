<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;

class UpdateController extends BaseController
{
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function __invoke(UpdateRequest $request, Category $category)
  {
    $data = $request->validated();
    $this->service->update($category, $data);

    return redirect()->route('list-category');
  }
}
