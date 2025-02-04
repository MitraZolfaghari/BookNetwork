<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveBookForm extends FormRequest
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
            'name'          => 'required|string|max:255',
            'pages'         => 'required|integer|min:1',
            'isbn'          => 'required|string|digits:10',
            'price'         => 'required|numeric',
            'publishedat'   => 'required|date'
        ];
    }
}
