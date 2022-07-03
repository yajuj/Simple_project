<?php

namespace App\Http\Requests\Material;

use App\Enum\Material\MaterialTypesEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreRequest extends FormRequest
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
      "type" => ["required", new Enum(MaterialTypesEnum::class)],
      "category_id" => ["required", "exists:categories,id"],
      "title" => ["required", "string", "max:255"],
      "authors" => ["nullable", "string", "max:255"],
      "description" => ["nullable", "string"]
    ];
  }

  public function messages()
  {
    return [
      'type.required' => 'Тип не может быть пустым',
      'type.*' => 'Недопустимый тип',
      'title.string' => 'Название должно быть строкой',
      'title.required' => 'Название не может пустой',
      'title.max' => 'Название не может быть длиннее 255 символов',
      'authors.string' => 'Строка авторов должна быть строкой',
      'authors.max' => 'Строка авторов не может быть длиннее 255 символов',
      'description.string' => 'Описание должно быть строкой',
      'category_id.*' => 'Недопустимая категория',
    ];
  }
}
