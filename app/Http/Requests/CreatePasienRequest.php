<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePasienRequest extends FormRequest
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
            'jenis_identitas_id' => ['required', 'exists:jenis_identitas,id'],
            'nomor_identitas'    => ['required'],
            'nama'               => ['required'],
            'jenis_kelamin'      => ['required',],
            'tempat_lahir'       => ['nullable'],
            'tanggal_lahir'      => ['nullable'],
            'golongan_darah'     => ['nullable'],
            'agama_id'           => ['nullable'],
            'suku_id'            => ['nullable', 'exists:sukus,id'],
            'pendidikan_id'      => ['nullable'],
            'pekerjaan_id'       => ['nullable', 'exists:pekerjaans,id'],
            'alamat'             => ['nullable'],
            'kelurahan_id'       => ['nullable', 'exists:kelurahans,id'],
            'telepon'            => ['nullable'],
            'nama_ayah'          => ['nullable'],
            'nama_ibu'           => ['nullable'],
            'alamat_keluarga'    => ['nullable'],
            'telepon_keluarga'   => ['nullable'],
            'status_pernikahan'  => ['nullable'],
            'nama_pasangan'      => ['nullable'],
        ];
    }
}
