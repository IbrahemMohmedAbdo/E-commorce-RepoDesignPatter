<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name' => 'required|max:255|unique:products,name',
            'description' => 'nullable',
            'price' => 'required|numeric|min:0',
            'image' => 'required|mimes:jpeg,png,jpg,gif',
            'category_id' => 'required|array|min:1',
        ];
    }
}
