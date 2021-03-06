<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeparementRequest extends FormRequest
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
            'txtName' => 'required|unique:department_new,name'
        ];
    }

    public function messages() {
        return[
            'txtName.required' => 'Please Enter Deparement Name',
            'txtName.unique' => 'This Name Already Exists'
        ];
    }
}
