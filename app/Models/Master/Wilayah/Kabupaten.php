<?php

namespace App\Models\Master\Wilayah;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $guarded = [];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kecamatan()
    {
        return $this->hasMany(Kecamatan::class);
    }

}
