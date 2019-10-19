<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
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
            'title' => 'required', // if want title be as email --> required | email
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'You must enter title',
            // 'title.email' => 'Title should be an email address"; this is pop message
            'description.required' => 'You must enter description',
        ];
    }
}
