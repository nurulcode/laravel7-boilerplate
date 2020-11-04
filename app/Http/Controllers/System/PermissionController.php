<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;


class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission = Permission::get();
        return view('system.permission.index',compact('permission'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request;
        $this->validate($request, [
            'name' => 'required|string|unique:permissions'
        ]);

        Permission::firstOrCreate([
            'name' => $request->name
        ]);
        return redirect()->route('permission.index')->with('success','Data question has been submitted');
    }

}
