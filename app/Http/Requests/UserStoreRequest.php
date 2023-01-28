<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
                'name' => 'required|string|max:50',
                'email' => 'required|email',
                'address' => 'required|string',
                'company' => 'required|string|max:50',
                'Birthday' => 'required|string|max:50',
                'links' => 'required|string|max:50',
                'notes' => 'required|string|max:50',

            
            ];

    
    }


    public function messages()
    {
        return [
                 
                'name' => 'name is required',
                'email' => 'email is required',
                'address' => 'address is required',
                'company' => 'company is required',
                'Birthday' => 'Birthday is required',
                'links' => 'links is required',
                'notes' => 'notes is required',
        ];
    }
}
