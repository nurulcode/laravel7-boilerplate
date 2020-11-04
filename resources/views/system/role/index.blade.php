@extends('layouts.global')
@section('title')
Role Manajemenet
@endsection

@section('content')
<x-app-card>
    <x-slot name="title">
        <div class="row align-items-center mt-0">
            <div class="col-md-6 d-none d-md-block ">
                <p class="font-16 mt-0 align-middle text-capitalize">Role Manajement</p>
            </div>
            <div class="col-md-6  col text-right">
                <a href="{{ route('role.create') }}" class="btn btn-primary waves-light">
                    Tambah Data
                </a>
            </div>
        </div>
    </x-slot>

    <table id="table-role" class="table table-bordered table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead class="text-center text-bold">
            <tr>
                <th>Nama</th>
                <th>Roles</th>
                <th>Create At</th>
                <th style="width: 100px;">Action</th>
            </tr>
        </thead>
    </table>
</x-app-card>


@include('system.role.delete')
@endsection



@section('javascript')
<script>
    $(document).ready(function () {
        $('#form-insert-role').parsley();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#table-role').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('role.index') }}",
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
                data: 'roles',
            }, {
                data: 'created_at'
            }, {
                data: 'action',
                orderable: false,
                searchable: false,
            }],
            order: [
                [0, 'asc']
            ]
        });
    });


    //Delete Data
    $(document).on('click', '.delete', function () {
        dataId = $(this).attr('id');
        $('#delete-role-modal').modal('show');

        $('#delete-role-button').click(function () {
            $.ajax({
                url: "role/" + dataId,
                type: 'delete',
                beforeSend: function () {
                    $('#delete-role-button').text('Loading ...');
                },
                success: function (data) {
                    iziToast.show({
                    color: data.color,
                    title: data.status,
                    message: data.message,
                    position: 'topRight'
                });
                    setTimeout(function () {
                        $('#delete-role-modal').modal('hide');
                        $('#delete-role-button').text('Hapus');
                        let oTable = $('#table-role').dataTable();
                        oTable.fnDraw(false);
                    });
                }
            })
        });
    });

</script>
@endsection
