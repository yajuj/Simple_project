<?php

namespace App\Services\Link;

use App\Models\Link;

class LinkService
{

  public function getAll()
  {
    return Link::all();
  }

  public function store($data)
  {
    Link::create($data);
  }

  public function update(Link $link, array $data)
  {
    $link->update($data);
  }

  public function destroy($linkId)
  {
    Link::destroy($linkId);
  }
}
