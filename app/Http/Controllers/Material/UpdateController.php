<?php

namespace App\Http\Controllers\Material;

use App\Http\Requests\Material\UpdateRequest;

class UpdateController extends BaseController
{
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(UpdateRequest $request)
  {
    $data = $request->validated();
  }
}
