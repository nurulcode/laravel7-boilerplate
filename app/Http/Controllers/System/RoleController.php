<?php

namespace App\Http\Controllers\System;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    // function __construct()
    // {
    //      $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = Role::with('permissions')->get();
        if($request->ajax()){
            return datatables()->of($roles)
                        ->addColumn('action', function($data){
                            $action  = '<a class="btn btn-primary btn-sm waves-effect waves-light" href="'.route("role.edit", $data->id).'"><i class="fas fa-edit"></i></a>';
                            $action .= '&nbsp;';
                            $action .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>';
                            return $action;
                        })
                        ->addColumn('roles', function($data){
                            $roles = '';

                            foreach ($data->permissions as $v) {
                                $roles .= '<label class="badge badge-primary mr-1 p-1">'.$v->name.'</label>';
                                // if ( Str::of($v->name)->contains('delete') || $v->name == 'superuser' ) {
                                //     $roles .='<br>';
                                // }
                            }
                            return $roles;
                        })
                        ->editColumn('created_at', function($data){
                            $create = Carbon::parse($data->created_at);
                            return $create;
                        })
                        ->rawColumns(['action', 'roles'])
                        ->addIndexColumn()
                        ->make(true);
        }
        return view('system.role.index',compact('roles'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();
        return view('system.role.create',compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Role $role)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

            $role->name = $request->input('name');
            $role->save();
            $role->syncPermissions($request->input('permission'));

        return redirect()->route('role.index')->with('success','Data question has been submitted');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::select('id', 'name')->get();
        $rolePermissions = DB::table("role_has_permissions")
            ->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();

        // return $role;
        return view('system.role.edit',compact('role','permission','rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));

        return redirect()->route('role.index')->with('success','Data question has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return response()->json([
            'color' => 'green',
            'status' => 'success',
            'message' => 'Your data has been deleted'
        ]);
        // return redirect()->route('role.index')->with('success','Deleted successfully');
    }
}
