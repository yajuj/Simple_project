<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Services\Tag\TagService as Service;

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
