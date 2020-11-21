<?php

namespace App\Http\Controllers\Layanan;

use App\Models\Layanan\RawatJalan;
use App\Models\Pasien;
use Illuminate\Http\Request;

class RawatJalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function pasien()
    {
        $result = Pasien::get();
        if(request()->ajax()){
            return datatables()->of($result)
                        ->addColumn('action', function($data){
                            $action = '<a class="btn btn-primary btn-sm waves-effect waves-light" href="'.route("rawat-jalan.create", "pasien=".$data->id).'"><i class="fas fa-edit"></i></a>';
                            return $action;
                        })
                        ->addColumn('lahir', function($data){
                            $lahir = $data->tempat_lahir .'<br>'. $data->tanggal_lahir;
                            return $lahir;
                        })
                        ->rawColumns(['action', 'lahir'])
                        ->addIndexColumn()
                        ->make(true);
        }
        return view('layanan.rawat-jalan.pasien');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasien = Pasien::findOrFail(request()->pasien);

        
        return $pasien;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RawatJalan  $rawatJalan
     * @return \Illuminate\Http\Response
     */
    public function show(RawatJalan $rawatJalan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RawatJalan  $rawatJalan
     * @return \Illuminate\Http\Response
     */
    public function edit(RawatJalan $rawatJalan)
    {
        return 'hahah';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RawatJalan  $rawatJalan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RawatJalan $rawatJalan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RawatJalan  $rawatJalan
     * @return \Illuminate\Http\Response
     */
    public function destroy(RawatJalan $rawatJalan)
    {
        //
    }
}
