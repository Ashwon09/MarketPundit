<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BODRequest extends FormRequest
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
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'picture' => 'required|mimes:jpg,png,jpeg',
            //
        ];
    }

    public function createBOD()
    {
        $file = $this->file('picture');
        $newImageName = time() . '_' . $file->getClientOriginalName();
        $dest = public_path('/uploads/bod');
        $this->file('picture')->move($dest, $newImageName);

        return [
            'name'=>$this->name,
            'role'=> $this->position,
            'description' => $this->description,
            'picture' => $newImageName,
        ];
    }
}
