<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CafeFormRequest extends FormRequest
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
            'name' => ['required', 'alpha', 'max:15'],
            'surname' => ['required', 'alpha', 'max:25'],
            'email' => ['nullable', 'email'],
        ];
    }
}
