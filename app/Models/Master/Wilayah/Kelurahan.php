<?php

namespace App\Models\Master\Wilayah;

use App\Models\Registrasi\Pasien;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $guarded = [];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }
}


