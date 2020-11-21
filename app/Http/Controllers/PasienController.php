<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasienRequest;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Pasien::get();
        if(request()->ajax()){
            return datatables()->of($result)
                        ->addColumn('action', function($data){
                            $action  = '<a class="show btn btn-info btn-sm waves-effect waves-light" id="'.$data->id.'" href="javascript:void(0)" ><i class="fas fa-eye"></i></a>';
                            $action .= '&nbsp;';
                            $action .= '<a class="btn btn-primary btn-sm waves-effect waves-light" href="'.route("pasien.edit", $data->id).'"><i class="fas fa-edit"></i></a>';
                            // $action .= '&nbsp;';
                            // $action .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>';
                            return $action;
                        })
                        ->addColumn('lahir', function($data){
                            $role = $data->tempat_lahir .'<br>'. $data->tanggal_lahir;
                            return $role;
                        })
                        ->rawColumns(['action', 'lahir'])
                        ->addIndexColumn()
                        ->make(true);
        }
        return view('pasien.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $last = Pasien::mr()->first();
        $sum = str_pad($last->no_rekam_medis + 1, 6, 0, STR_PAD_LEFT);
        return response()->json([
            'status' => 'success',
            'data' => $sum
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pasien = new Pasien();
        $pasien->tanggal_registrasi = now();
        $pasien->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Data has bean created',
            'data' => $pasien->id
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        return response()->json([
            'status' => 'success',
            'data' => $pasien
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        $pasien->kelurahan->kecamatan->kabupaten->provinsi ?? '';
        return view('pasien.edit',
        [
            'pasien' => $pasien
            ]
        );
    }

    public function edit_detail(Pasien $pasien)
    {
        return response()->json([
            'status' => 'success',
            'data' => $pasien
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePasienRequest $request, Pasien $pasien)
    {
        $pasien->update($request->except('id', 'no_rekam_medis', 'provinsi', 'kabupaten', 'kecamatan'));
        return response()->json([
            'status'=> 'success',
            'message' => 'Data has bean updated'
        ], 201);
        // $pasien = new Pasien();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Data has bean deleted'
        ], 204);
    }
}
