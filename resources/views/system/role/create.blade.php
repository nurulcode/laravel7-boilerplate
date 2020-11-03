@extends("layouts.global")
@section("title") Form @endsection

@section('content')
<x-app-card>
    <h4 class="mt-0 header-title">Form</h4>
    <hr>
    <form action="{{ route('role.store') }}" method="post">
        @csrf
        <div class="inner form-group">
            <div class="inner row">
                <div class="col-md-10 col-8">
                    <input type="text" name="name" value="{{ old('name') }}" class="inner form-control {{ $errors->has('name') ? 'is-invalid' : '' }} " placeholder="Nama Roles ...">
                    <small class="text-danger">{{ $errors->first('name') ? $errors->has('name') : '*. superuser, user, manage-pegawai'}}</small>
                </div>
                <div class="col-md-2 col-4">
                    <input type="submit" class="btn btn-primary btn-block inner" value="Tambah Role">
                </div>
            </div>
        </div>

        <div class="form-check">
            @php $no = 1; @endphp
            @foreach ($permission as $result)
            @if ( Str::of($result->name)->contains('list') )
            <h5>{{ Str::title(Str::of($result->name)->before('-')) }}</h5>
            @endif
            <input type="checkbox" name="permission[]" id="{{ $result->id }}" value="{{ $result->id }}">
            <label for="{{ $result->id }}">{{ $result->name }}</label>

            @endforeach
            <small class="text-danger">{{ $errors->first('role') }}</small>
        </div>
    </form>
</x-app-card>
@endsection
