<?php

namespace App\Http\Controllers\Material;

use App\Http\Requests\Material\UpdateRequest;
use App\Models\Material;

class UpdateController extends BaseController
{
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Material  $material
   * @return \Illuminate\Http\Response
   */
  public function __invoke(UpdateRequest $request, Material $material)
  {
    $data = $request->validated();
    $this->service->update($material, $data);

    return redirect()->route('list-material');
  }
}
