<?php


namespace App\Http\Controllers\Link;

use Illuminate\Http\Request;

class DestroyController extends BaseController
{
  /**
   * Remove the specified resource from storage.
   *
   * @param  \Illuminate\Http\Request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request)
  {
    $this->service->destroy($request->id);
    return back();
  }
}
