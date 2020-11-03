<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-12">
            {{-- <h4 class="page-title">Tambah Users</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">simrs</a>
                </li>
                @if (Request::segment(1) !== 'home')
                <li class="breadcrumb-item">
                    <a href="{{ route(Request::segment(1).'.index') }}">{{ Request::segment(1) }}</a>
                </li>
                <li class="breadcrumb-item active">{{ Request::segment(2) }}</li>
                @endif
            </ol> --}}
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-sm">Back</a>
        </div>
    </div>
</div>
