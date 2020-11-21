<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::created(function ($model) {

            if (empty($model->no_rekam_medis)) {
                $model->no_rekam_medis = str_pad($model->id, 6, 0, STR_PAD_LEFT);
            }

            $model->save();
        });
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function kelurahan()
    {
        return $this->belongsTo('App\Models\Master\Wilayah\Kelurahan');
    }

    public function scopeMr($query)
    {
         return $query->orderby('no_rekam_medis', 'DESC');
    }



}
