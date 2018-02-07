<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestStoreRequest extends FormRequest
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
            'test_name'     => 'required|unique:tests,test_name',
            'min_to_aprove' => 'required',
            'test_value'    => 'required',
        ];
    }
}
