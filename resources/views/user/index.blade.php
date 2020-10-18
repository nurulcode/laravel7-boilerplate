@extends('layouts.global')
@section('title')
Users
@endsection

@section('content')
<div class="index">
    <x-app-card col1="col-lg-12" col2="d-none">
        <x-slot name="slot1">
            <div class="text-right">
                <a href="{{ route('user.create') }}" class="btn btn-primary waves-light mb-3">
                    Tambah Data
                </a>
            </div>
            <table id="table-user" class="table table-bordered table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead class="text-center text-bold">
                    <tr>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </x-slot>
    </x-app-card>
</div>
@include('user.delete')
@endsection


@section('javascript')
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#table-user').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('user.index') }}",
                type: 'GET'
            },
            columnDefs: [{
                orderable: true,
                className: 'text-center',
                targets: [3]
            }],
            columns: [{
                data: 'name',
            }, {
                data: 'username',
            }, {
                data: 'email'
            }, {
                data: 'action',
            }],
            order: [
                [0, 'asc']
            ]
        });
    });

    //Delete Data
    $(document).on('click', '.delete', function () {
        dataId = $(this).attr('id');
        $('#delete-user-modal').modal('show');

        $('#delete-user-button').click(function () {
            $.ajax({
                url: "user/" + dataId,
                type: 'delete',
                beforeSend: function () {
                    $('#delete-user-button').text('Loading ...');
                },
                success: function (data) {
                    setTimeout(function () {
                        $('#delete-user-modal').modal('hide');
                        $('#delete-user-button').text('Hapus');
                        let oTable = $('#table-user').dataTable();
                        oTable.fnDraw(false);
                    });
                },
                error: function (data) {
                console.log('Error:', data);
                $('#delete-user-button').text('Hapus');
                $('#delete-user-modal').modal('hide');
            }
            })
        });
    });

</script>
@endsection
