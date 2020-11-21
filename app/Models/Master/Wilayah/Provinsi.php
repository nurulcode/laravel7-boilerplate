<?php

namespace App\Models\Master\Wilayah;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $guarded = [];

    public function kabupatens()
    {
        return $this->hasMany(Kabupaten::class);
    }
}
