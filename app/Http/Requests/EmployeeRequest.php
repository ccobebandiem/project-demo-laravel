<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'sltDepa'            => 'required',
            'txtName'          => 'required|unique:employee_new,name',
            'txtDescription'  => 'required'
        ];
    }

    public function messages() {
        return[
            'sltDepa.required' => 'Please Choose Department',
            'txtDescription.required' => 'Please Enter Employee Description',
            'txtName.required' => 'Please Enter Employee Name',
            'txtName.unique' => 'This Name Already Exists'
        ];
    }
}
