@extends('layouts.global')
@section('title')
pasien Manajement
@endsection

@section('content')
<x-app-card>
    <x-slot name="title">
        <div class="row align-items-center mt-0">
            <div class="col-md-6 d-none d-md-block ">
                <h5 class="mt-0 align-middle text-capitalize text-primary">pasien manajement</h5>
            </div>
            <div class="col-md-6  col text-right">
                <a href="javascript:void(0)" class="btn btn-primary waves-light mb-3 align-middle rm-create">
                    <i class="fas fa-plus "></i> Pasien Baru
                </a>
                <a href="javascript:void(0)" class="btn btn-outline-primary waves-light mb-3 align-middle">
                    <i class="fas fa-align-justify"></i> Scan Barcode
                </a>
                <a href="javascript:void(0)" class="btn btn-primary waves-light mb-3 align-middle">
                    <i class="fas fa-credit-card"></i> Kartu Pasien
                </a>
            </div>
        </div>
    </x-slot>
    <table id="table-pasien" class="table table-bordered table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead class="text-center text-bold">
            <tr>
                <th>MR</th>
                <th>Nama</th>
                <th>Tempat, Tgl Lahir</th>
                <th>Alamat</th>
                <th style="width: 100px">Action</th>
            </tr>
        </thead>
    </table>
</x-app-card>

@include('pasien.create')
@endsection

@section('javascript')
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let t = $('#table-pasien').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('pasien.index') }}",
                type: 'GET'
            },
            columnDefs: [{
                orderable: true,
                className: 'text-center',
                targets: [0, 4]
            }],
            columns: [{
                data: 'no_rekam_medis',
            }, {
                data: 'nama'
            }, {
                data: 'lahir'
            }, {
                data: 'alamat'
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

    // $('#create-button').click(function () {
    //     $('#create-modal').modal('show');
    // });

    if ($("#form").length > 0) {
        $("#form").validate({
            submitHandler: function (form) {
                var actionType = $('#button-submit').val();
                $('#button-submit').html('Sending..');
                $.ajax({
                    data: $('#form')
                        .serialize(),
                    url: "{{ route('pasien.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#form').trigger("reset");
                        $('#create-modal').modal('hide');
                        $('#button-submit').html('Simpan');
                        var oTable = $('#table-pasien').dataTable();
                        oTable.fnDraw(false);
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


        $('body').on('click', '.rm-create', function () {
            $.get('{{ route('pasien.create') }}', function (data) {
                console.log(data);
                $('#modal-title').html('Tambah Pasien Baru')
                $('#rm-modal').modal('show')

                $('#no_rekam_medis').val(data.data)
            })
        })

        if ($("#form-rm").length > 0) {
        $("#form-rm").validate({
            submitHandler: function (form) {
                var actionType = $('#button-submit').val();
                $('#button-submit').html('Sending..');
                $.ajax({
                    data: $('#form-rm')
                        .serialize(),
                    url: "{{ route('pasien.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#form-rm').trigger("reset");
                        $('#rm-modal').modal('hide');
                        $('#button-submit').html('Simpan');
                        var oTable = $('#table-pasien').dataTable();
                        oTable.fnDraw(false);
                        toast(data);

                        window.location.href = `/pasien/${data.data}/edit`; //Will take you to Google.
                    },
                });
            }
        })
    }

</script>
@endsection
