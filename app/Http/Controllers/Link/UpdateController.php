<?php

namespace App\Http\Controllers\Link;

use App\Http\Requests\Link\UpdateRequest;
use App\Models\Link;

class UpdateController extends BaseController
{
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Link  $link
   * @return \Illuminate\Http\Response
   */
  public function __invoke(UpdateRequest $request)
  {
    $data = $request->validated();
    $this->service->update($data);

    return back();
  }
}
