<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasienRequest extends FormRequest
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
            'id' => 'required|unique:pasiens,id,' . $this->id,
            'no_rekam_medis' => 'required|unique:pasiens,no_rekam_medis,' . $this->id,
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'nama_ibu' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ];
    }
}
