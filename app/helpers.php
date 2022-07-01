<?php

use App\Enum\Material\MaterialTypesEnum;

if (!function_exists('getMaterialTypesEnum')) {
  function getMaterialTypesEnum(): array
  {
    return array_map(function ($item) {
      return $item->value;
    }, MaterialTypesEnum::cases());
  }
}
