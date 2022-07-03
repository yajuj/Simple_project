<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
  /**
   * Provision a new web server.
   * @param \Illuminate\Http\Request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request)
  {
    $query = $request->q;

    $materials_ids = Material::selectRaw('distinct materials.id as id')
      ->join('material_tags', 'materials.id', '=', 'material_tags.material_id')
      ->orWhere('materials.title', 'like', "%{$query}%")
      ->orWhere('materials.authors', 'like', "%{$query}%")
      ->orWhereIn('material_tags.tag_id', function ($q) use ($query) {
        $q->select(DB::raw('id'))->from('tags')->where('tags.title', 'like', "{$query}%");
      })
      ->orWhereIn('category_id', function ($q) use ($query) {
        $q->select(DB::raw('id'))->from('categories')->where('title', 'like', "{$query}%");
      })
      ->get();

    $materials = Material::whereIn('id', $materials_ids)->get();

    return view('material.list', compact('materials', 'query'));
  }
}
