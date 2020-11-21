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

                <a href="javascript:void(0)" class="btn btn-primary waves-light mb-3" id="create-button">Tambah Data</a>

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
@include('system.user.create')
@include('system.user.show')
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

    function errorHandler(errors) {
        $('#nameError').text(errors.name = errors.name ? errors.name : '');
        $('#emailError').text(errors.email = errors.email ? errors.email : '');
        $('#usernameError').text(errors.username = errors.username ? errors.username : '');
    }

    $('#create-button').click(function () {
        $('#button-submit').val("Submit");
        $('#id').val(''); //valuenya menjadi kosong
        $('#form').trigger("reset");
        errorHandler('')
        $('#modal-title').html("Form"); //valuenya tambah pegawai baru
        $('#create-edit-modal').modal('show'); //modal tampil
    });

    if ($("#form").length > 0) {
        $("#form").validate({
            submitHandler: function (form) {
                var actionType = $('#button-submit').val();
                $('#button-submit').html('Sending..');
                $.ajax({
                    data: $('#form')
                        .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                    url: "{{ route('user.store') }}", //url simpan data
                    type: "POST", //karena simpan kita pakai method POST
                    dataType: 'json', //data tipe kita kirim berupa JSON
                    success: function (data) { //jika berhasil
                        $('#form').trigger("reset"); //form reset
                        $('#create-edit-modal').modal('hide'); //modal hide
                        $('#button-submit').html('Simpan'); //tombol simpan
                        var oTable = $('#table_pegawai').dataTable(); //inialisasi datatable
                        oTable.fnDraw(false); //reset datatable
                        toast(data);
                    },
                    error: function (response) { //jika error tampilkan error pada console
                        let errors = response.responseJSON.errors
                        errorHandler(errors)
                        $('#button-submit').html('Simpan');
                    }
                });
            }
        })
    }
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
                toast(data);
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
