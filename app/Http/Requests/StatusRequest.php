<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatusRequest extends FormRequest
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
            'status_heading' => 'required',
            'status_description' => 'required',
            //
        ];
    }

    public function createStatus()
    {

        return [
            'status_heading' => $this->status_heading,
            'status_description' => $this->status_description,
        ];
    }
}
