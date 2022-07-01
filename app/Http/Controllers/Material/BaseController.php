<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Services\Material\MaterialService as Service;

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
