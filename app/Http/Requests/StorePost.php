<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
  public function authorize()
{
    return true; // gate will be responsible for access
}

public function rules()
{
    return [
        'title' => 'required|unique:posts',
        'body' => 'required',
    ];
}
}
