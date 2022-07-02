<?php

namespace App\Http\Controllers\Tag;

use App\Http\Requests\Tag\StoreRequest;

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

    return redirect()->route('list-tag');
  }
}
