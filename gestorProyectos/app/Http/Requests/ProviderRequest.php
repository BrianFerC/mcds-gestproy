<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProviderRequest extends FormRequest
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
        if ($this->method() == 'PUT') {
            return [
                'name_provider'   => 'required|unique:providers|name_provider'.$this->id,
                'name_contact'    => 'required',
            ];
        } else {
            return [
                'name_provider'   => 'required|unique:providers',
                'name_contact'    => 'required',
                'photo'           => 'required|image|max:2000',
                
            ];
        }
    }
    public function messages() {
        return [
            'id.required' => 'The provider field is required.'
        ];
    }
}
