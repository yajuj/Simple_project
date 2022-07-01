<?php

namespace App\Http\Controllers\Material;

use App\Http\Requests\Material\StoreRequest;

class StoreController extends BaseController
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(StoreRequest $request)
  {
    $data = $request->validated();

    $this->service->store($data);

    return redirect('/')->route('list-material');
  }
}
