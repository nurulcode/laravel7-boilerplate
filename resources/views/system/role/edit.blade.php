@extends("layouts.global")
@section("title") Edit Role @endsection

@section('content')
<x-app-card>
    <div>
        <h4 class="mt-0 header-title">Edit Role</h4>
        <hr>
        <form action="{{ route('role.update', $role->id) }}" method="post">
            @method('PATCH')
            @csrf
            <div class="inner form-group">
                <div class="inner row">
                    <div class="col-md-10 col-8">
                        <input type="text" name="name" value="{{ old('name', $role->name ) }}" class="inner form-control {{ $errors->has('name') ? 'is-invalid' : '' }} " placeholder="Nama Roles ...">
                        <small class="text-danger">{{ $errors->first('role') ? $errors->first('role') : '*. superuser, user, manage-pegawai'}}</small>
                    </div>
                    <div class="col-md-2 col-4">
                        <input type="submit" class="btn btn-primary btn-block inner" value="Update Role">
                    </div>
                </div>
            </div>

            <div class="form-check">
                @php $no = 1; @endphp
                @foreach ($permission as $result)
                @if ( Str::of($result->name)->contains('list') )
                    <h5>{{ Str::title(Str::of($result->name)->before('-')) }}</h5>
                @endif
                <input type="checkbox" name="permission[]" id="{{ $result->id }}" value="{{ $result->id }}" {{ in_array($result->id, $rolePermissions) ? 'checked' : '' }}>
                <label for="{{ $result->id }}">{{ $result->name }}</label>

                @endforeach
                <small class="text-danger">{{ $errors->first('role') }}</small>
            </div>
        </form>
    </div>
</x-app-card>
@endsection
