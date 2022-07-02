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

  public function update(array $data)
  {
    $link =  Link::findOrFail($data['link_id']);
    $link->update(['url' => $data['url'], 'label' => $data['label']]);
  }

  public function destroy($linkId)
  {
    Link::destroy($linkId);
  }
}
