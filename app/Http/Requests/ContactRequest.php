<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email'=> 'required|email',
            'name' => 'required|string|max:255',
            'message' => 'required|min:5|max:255',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Поле name является обезательным',
            'email.required'=>'Поле email является обезательным',
            'message.required'=>'Поле message является обезательным'

        ];
    }
}
