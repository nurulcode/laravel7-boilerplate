@extends('layouts.global')
@section('title')
User Manajement
@endsection

@section('content')
<x-app-card>
    <x-slot name="title">
        <div class="row align-items-center mt-0">
            <div class="col-md-6 d-none d-md-block ">
                <h5 class="font-16 mt-0 align-middle text-capitalize">user manajement</h5>
            </div>
            <div class="col-md-6  col text-right">
                <a href="{{ route('user.create') }}" class="btn btn-primary waves-light">
                    Tambah Data
                </a>
            </div>
        </div>
    </x-slot>
    <table id="table-user" class="table table-bordered table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead class="text-center text-bold">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Roles</th>
                <th style="width: 100px">Action</th>
            </tr>
        </thead>
    </table>
</x-app-card>

@include('system.user.delete')
@endsection

@section('javascript')
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let t = $('#table-user').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('user.index') }}",
                type: 'GET'
            },
            columnDefs: [{
                orderable: true,
                className: 'text-center',
                targets: [0, 4]
            }],
            columns: [{
                data: 'id',
            }, {
                data: 'name',
            }, {
                data: 'username'
            }, {
                data: 'roles'
            }, {
                data: 'action',
                orderable: false,
                searchable: false,
            }],
            order: [
                [1, 'asc']
            ]
        });

        t.on('order.dt search.dt', function () {
            t.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();
    });


    //Delete Data
    $(document).on('click', '.delete', function () {
        dataId = $(this).attr('id');
        $('#delete-user-modal').modal('show');
    });

    $('#delete-user-button').click(function () {
        $.ajax({
            url: "user/" + dataId,
            type: 'delete',
            beforeSend: function () {
                $('#delete-user-button').text('Loading ...');

            },
            success: function (data) {
                iziToast.show({
                    color: data.color,
                    title: data.status,
                    message: data.message,
                    position: 'topRight'
                });
                $('#delete-user-modal').modal('hide');
                $('#delete-user-button').text('Hapus');
                let oTable = $('#table-user').dataTable();
                oTable.fnDraw(false);
            },
            error: function (data) {
                console.log('Error:', data);
                $('#delete-user-button').text('Hapus');
            }
        })
    });

</script>
@endsection
