<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoCreateRequest extends FormRequest
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
            //
            'title' => 'required|max:100',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title field is required.',
            'title.max' => 'Todo title should not be greater than 100 characters.',
            'description.required' => 'Description of the Todo is required',
        ];

    }
}
