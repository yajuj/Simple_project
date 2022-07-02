<?php

namespace App\Http\Controllers\Link;

use App\Http\Requests\Link\StoreRequest;

class StoreController extends BaseController
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(StoreRequest $request, $materialId)
  {
    $data = $request->validated();
    $data['material_id'] = $materialId;
    $this->service->store($data);
    return redirect()->route('view-material', $materialId);
  }
}
