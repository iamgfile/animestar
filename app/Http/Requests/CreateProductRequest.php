<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use ValidatesRequests;

class CreateProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:60',
            'description' => 'required',
            'image' => 'dimensions:max_width=400,max_height=400',
            'rating' => 'required|integer|between:0,100'
        ];
    }
}
