<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
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
            'photo_heading' => 'required',
            'photo_location' => 'required|mimes:jpg,png,jpeg',
            //
        ];
    }

    public function createPhoto()
    {

        $file = $this->file('photo_location');
        $newImageName = time() . '_' . $file->getClientOriginalName();
        $dest = public_path('/uploads/photos');
        $this->file('photo_location')->move($dest, $newImageName);

        return [
            'photo_heading' => $this->photo_heading,
            'photo_location' => $newImageName,
        ];
    }
}
