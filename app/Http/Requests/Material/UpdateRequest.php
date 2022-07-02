<?php

namespace App\Http\Requests\Material;

use App\Enum\Material\MaterialTypesEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class UpdateRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [
      "type" => [new Enum(MaterialTypesEnum::class), "required"],
      "category_id" => ["exists:categories,id", "required"],
      "title" => ["string", "required"],
      "authors" => ["string", "nullable"],
      "description" => ["string", "nullable"]
    ];
  }
}
