<?php

namespace App\Http\Requests\Tag;

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
      "title" => ["required", "string",  "max:255", "unique:tags,title"],
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
