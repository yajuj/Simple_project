<?php

namespace App\Services\Tag;

use App\Models\Tag;

class TagService
{

  public function getAll()
  {
    return Tag::all();
  }

  public function store($data)
  {
    Tag::create($data);
  }

  public function update(Tag $tag, array $data)
  {
    $tag->update($data);
  }

  public function destroy($tagId)
  {
    Tag::destroy($tagId);
  }
}
