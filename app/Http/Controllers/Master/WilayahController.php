<?php

namespace App\Http\Controllers\Master;

use App\Models\Master\Suku;
use App\Models\Master\Wilayah\Kabupaten;
use App\Models\Master\Wilayah\Kecamatan;
use App\Models\Master\Wilayah\Kelurahan;
use App\Models\Master\Wilayah\Provinsi;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function getProvinsi(Provinsi $provinsi)
    {
        $data = $provinsi::get();
        return response()->json($data);
    }

    public function getSuku(Suku $suku)
    {
        $data = $suku->get();
        return response()->json($data);
    }

    public function getKabupaten($id)
    {
        $data = Kabupaten::where('provinsi_id', $id)->get();
        return response()->json($data);
    }

    public function getKecamatan($id)
    {
        $data = Kecamatan::where('kabupaten_id', $id)->get();
        return response()->json($data);
    }

    public function getKelurahan($id)
    {
        $data = Kelurahan::where('kecamatan_id', $id)->get();
        return response()->json($data);
    }
}
