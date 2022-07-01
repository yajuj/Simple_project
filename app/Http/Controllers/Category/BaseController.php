<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Services\Category\CategoryService as Service;

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
