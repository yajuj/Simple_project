<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

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
      "title" => ["string", "required", "max:255", "unique:categories,title"],
    ];
  }

  public function messages()
  {
    return [
      'title.required' => 'Название не может быть пустым',
      'title.string' => 'Название должно быть строкой',
      'title.unique' => 'Название должно быть уникальным',
      'title.max' => 'Название не может быть длиннее 255 символов',
    ];
  }
}
