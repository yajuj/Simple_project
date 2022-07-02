<?php

namespace App\Http\Controllers\Link;

use App\Http\Controllers\Controller;
use App\Services\Link\LinkService as Service;

class BaseController extends Controller
{
  public $service;

  /**
   * Class constructor.
   */
  public function __construct(Service $service)
  {
    $this->service = new $service;
  }
}
