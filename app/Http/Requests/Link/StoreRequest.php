<?php

namespace App\Http\Requests\Link;

use Illuminate\Foundation\Http\FormRequest;

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
      "label" => ["string", "nullable", "max:255"],
      "url" => ["string", "url", "required", "max:255"],
    ];
  }

  public function messages()
  {
    return [
      'label.string' => 'Название должно быть строкой',
      'label.max' => 'Название не может быть длиннее 255 символов',
      'url.string' => 'Ссылка должна быть строкой',
      'url.url' => 'Ссылка должна быть типа url',
      'url.required' => 'Ссылка не может быть пустой',
      'url.max' => 'Ссылка не может быть длиннее 255 символов',
    ];
  }
}
