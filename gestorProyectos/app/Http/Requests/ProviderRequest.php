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
                'image_provider'    => 'required',
                'name_contact'    => 'required',
            ];
        } else {
            return [
                'name_provider'   => 'required|unique:providers',
                'image_provider'  => 'required',
                'name_contact'    => 'required',
            ];
        }
    }
    public function messages() {
        return [
            'id.required' => 'The provider field is required.'
        ];
    }
}
