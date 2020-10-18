@extends("layouts.global")
@section("title") Tambah Edit @endsection

@section('content')
<x-app-card col1="col-lg-10" col2="d-none">
    <x-slot name="slot1">
        <h4 class="mt-0 header-title">Tambah User</h4>
        <hr>
        <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf


            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Lengap</label>
                <div class="col-sm-9">
                    <input name="name" value="{{ $user->name }}" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}">
                    @if($errors->has('name'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">username</label>
                <div class="col-sm-9">
                    <input name="username" value="{{ $user->username }}" type="text" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}">
                    @if($errors->has('username'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('username') }}</strong>
                    </div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input readonly value="{{ $user->email }}" type="text" class="form-control">
                </div>
            </div>


            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input placeholder="Password" name="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}">
                    <span class="text-danger">* Kosongkan jika tidak ingin merunah password</span>
                    @if($errors->has('password'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Confirm Password</label>
                <div class="col-sm-9">
                    <input placeholder="Confirm Password" name="confirm-password" type="password" class="form-control {{ $errors->has('confirm-password') ? 'is-invalid' : '' }}">
                    @if($errors->has('confirm-password'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('confirm-password') }}</strong>
                    </div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Roles</label>
                <div class="col-sm-9">
                    @foreach ($roles as $result)
                    <input type="checkbox" name="roles[]" id="{{ $result }}" value="{{ $result }}" {{ $user->hasRole($result) ? 'checked' : ''  }}>
                    <label for="{{ $result }}">{{ $result }}</label>
                    @endforeach
                </div>
            </div>

            <hr>
            <div class="form-group row mt-5 text-right">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">Submit</button>
                        <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </x-slot>
</x-app-card>
@endsection
