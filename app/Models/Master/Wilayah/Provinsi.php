<?php

namespace App\Models\Master\Wilayah;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    public function kabupatens()
    {
        return $this->hasMany(Kabupaten::class);
    }
}
