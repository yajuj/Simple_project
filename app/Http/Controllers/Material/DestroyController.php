<?php


namespace App\Http\Controllers\Material;

use Illuminate\Http\Request;

use App\Http\Controllers\Material\BaseController;

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
    return redirect()->route('list-material');
  }
}
