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
      "title" => ["string", "required", "max:255"],
      "authors" => ["string", "nullable", "max:255"],
      "description" => ["string", "nullable"]
    ];
  }

  public function messages()
  {
    return [
      'type.*' => 'Недопустимый тип',
      'title.string' => 'Название должно быть строкой',
      'title.required' => 'Ссылка не может пустой',
      'title.max' => 'Ссылка не может быть длиннее 255 символов',
      'authors.string' => 'Строка авторов должна быть строкой',
      'authors.max' => 'Строка авторов не может быть длиннее 255 символов',
      'description.string' => 'Описание должно быть строкой',
      'category_id.*' => 'Недопустимая категория',
    ];
  }
}
