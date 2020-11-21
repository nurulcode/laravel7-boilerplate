<?php

namespace App\Models\Master\Wilayah;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $guarded = [];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function pasien()
    {
        return $this->hasMany(Pasien::class);
    }
}
