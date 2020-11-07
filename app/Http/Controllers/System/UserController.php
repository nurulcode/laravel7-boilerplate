<?php

namespace App\Http\Controllers\System;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = User::get();
        if(request()->ajax()){
            return datatables()->of($result)
                        ->addColumn('action', function($data){
                            // $action  = '<a class="btn btn-info btn-sm waves-effect waves-light" href="'.route("user.show", $data->id).'" ><i class="fas fa-eye"></i></a>';
                            // $action .= '&nbsp;';
                            $action  = '<a class="btn btn-primary btn-sm waves-effect waves-light" alt="Girl in a jacket" href="'.route("user.edit", $data->id).'"><i class="fas fa-edit"></i></a>';
                            $action .= '&nbsp;';
                            $action .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>';


                            return $action;
                        })
                        ->addColumn('roles', function($data){
                            $roles = $data->getRoleNames();
                            $role = '';
                            foreach ($roles as $v) {
                                $role .= '<label class="badge badge-primary">'.$v.'</label> ';
                            }

                            return $role;
                        })
                        ->rawColumns(['action', 'roles'])
                        ->addIndexColumn()
                        ->make(true);
        }
        $roles = Role::pluck('name','name')->all();
        return view('system.user.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('system.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate( [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'username' => 'required|unique:users,username',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make('password');
        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return response()->json([
            'color' => 'green',
            'status' => 'success',
            'message' => 'Your data has been submitted'
        ]);

        // return redirect()->route('user.index')->with('success','Your data has bean submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('system.user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
    //  * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // $roles = Role::pluck('name','name')->all();
        // $userRole = $user->roles->pluck('name','name')->all();
        $roles = Role::pluck('name')->all();
        $userRole = $user->roles->pluck('name')->all();

        return view('system.user.edit',compact('user','roles','userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $user->id,
            ]);

        $input = $request->all();

        if ( !empty($input['password']) ) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, ['password']);
        }

        $user->update($input);
        if ($user->id !== 1) {
            DB::table('model_has_roles')->where('model_id',$user->id)->delete();
            $user->assignRole($request->input('roles'));
        }
        return redirect()->route('user.index')->with('success','Data question has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
    //  * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->id == 1) {
            return response()->json([
                'color' => 'yellow',
                'status' => 'error',
                'message' => 'Error'
            ]);        }

        $user->delete();
        // return response()->json($user);

        return response()->json([
            'color' => 'green',
            'status' => 'success',
            'message' => 'Your data has been deleted'
        ]);

    }
}
