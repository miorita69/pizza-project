<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ContactUsRequest extends FormRequest
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
                'name' => ['required', 'string', 'min:3', 'max:256'],
                'email' => ['required', 'email'],
                'department' => [
                    'nullable', 
                    'string', 
                    Rule::in(['administrative','acounting', 'depTechnical', 'depLogistic',]),
                 ],
                 'message' => [
                     Rule::requiredIf((bool)$this->input('departament')), 
                     'string', 
                     'min:10', 
                     'max:1000'
                 ],
                'readTerms' => ['required', 'boolean']
             ];            


    }
}
