<?php

namespace App\Services\Material;

use App\Models\Material;

class MaterialService
{

  public function getAll()
  {
    return Material::all();
  }

  public function store($data)
  {
    Material::create($data);
  }

  public function update(Material $material, array $data)
  {
    $material->update($data);
  }

  public function destroy($materialId)
  {
    Material::destroy($materialId);
  }
}
