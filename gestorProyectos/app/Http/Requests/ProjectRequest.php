<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
                'category_id'   => 'required',
                'tracing_id'    => 'required',
                'code'          => 'required|numeric',
                'name'          => 'required',
                'area'          => 'required',
                'class'         => 'required',
                'description'   => 'required',
                'budget'        => 'required|numeric',
                'state'         => 'required',
            ];
        } else {
            return [
                'category_id'   => 'required',
                'tracing_id'    => 'required',
                'code'          => 'required|numeric|unique:projects',
                'name'          => 'required|unique:projects',
                'area'          => 'required',
                'class'         => 'required',
                'description'   => 'required',
                'budget'        => 'required|numeric',
                'state'         => 'required',
            ];
        }
    }

    public function messages() {
        return [
            'category_id.required' => 'The category field is required.'
        ];
    }
}
