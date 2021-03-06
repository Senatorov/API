<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'age' => 'required|numeric|min:0|not_in:0',
            'role' => 'required|numeric|min:0|not_in:0',
            'salary' => 'required',
            'photo' => 'required|image:jpg, jpeg, png',
        ];
    }
}
