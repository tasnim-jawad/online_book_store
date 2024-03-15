<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'author' => 'required',
            'language' => 'required',
            'country' => 'required',
            'edition' => 'required',
            'pages' => 'required',
            'quantity' => 'required',
            'taka' => 'required',
            'category' => 'required',
            'image' => 'required|mimes:jpg,bmp,png,jpeg',
            'summery' => 'required'
        ];
    }
}
