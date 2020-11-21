@extends('layouts.global')
@section('title')
cara-pembayaran Manajement
@endsection

@section('content')
<x-app-card>
    <x-slot name="title">
        <div class="row align-items-center mt-0">
            <div class="col-md-6 d-none d-md-block ">
                <h5 class="mt-0 align-middle text-capitalize text-primary">cara-pembayaran manajement</h5>
            </div>
            <div class="col-md-6  col text-right">
                <a href="javascript:void(0)" class="btn btn-primary waves-light mb-3 align-middle rm-create">
                    <i class="fas fa-plus "></i> cara-pembayaran Baru
                </a>
                <a href="javascript:void(0)" class="btn btn-outline-primary waves-light mb-3 align-middle">
                    <i class="fas fa-align-justify"></i> Scan Barcode
                </a>
                <a href="javascript:void(0)" class="btn btn-primary waves-light mb-3 align-middle">
                    <i class="fas fa-credit-card"></i> Kartu cara-pembayaran
                </a>
            </div>
        </div>
    </x-slot>
    <table id="table-cara-pembayaran" class="table table-bordered table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead class="text-center text-bold">
            <tr>
                <th>No</th>
                <th>Group</th>
                <th>Uraian</th>
                <th style="width: 100px">Action</th>
            </tr>
        </thead>
    </table>
</x-app-card>

@endsection

@section('javascript')
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let t = $('#table-cara-pembayaran').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('cara-pembayaran.index') }}",
                type: 'GET'
            },
            columnDefs: [{
                orderable: true,
                className: 'text-center',
                targets: [0, 4]
            }],
            columns: [{
                data: 'no',
            }, {
                data: 'perent_id'
            }, {
                data: 'uraian'
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

    if ($("#form").length > 0) {
        $("#form").validate({
            submitHandler: function (form) {
                var actionType = $('#button-submit').val();
                $('#button-submit').html('Sending..');
                $.ajax({
                    data: $('#form')
                        .serialize(),
                    url: "{{ route('cara-pembayaran.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#form').trigger("reset");
                        $('#create-modal').modal('hide');
                        $('#button-submit').html('Simpan');
                        var oTable = $('#table-cara-pembayaran').dataTable();
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
            $.get('{{ route('cara-pembayaran.create') }}', function (data) {
                console.log(data);
                $('#modal-title').html('Tambah cara-pembayaran Baru')
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
                    url: "{{ route('cara-pembayaran.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#form-rm').trigger("reset");
                        $('#rm-modal').modal('hide');
                        $('#button-submit').html('Simpan');
                        var oTable = $('#table-cara-pembayaran').dataTable();
                        oTable.fnDraw(false);
                        toast(data);

                        window.location.href = `/cara-pembayaran/${data.data}/edit`; //Will take you to Google.
                    },
                });
            }
        })
    }

    $(document).on('click', '.show', function () {
        dataId = $(this).attr('id');
        $.get('/cara-pembayaran/' + dataId, function ({data}) {
                $('#show-cara-pembayaran-modal').modal('show')
            console.log(data);
                $('#nama_ibu').text(data.nama_ibu)
                $('#nama_ayah').text(data.nama_ayah)
                $('#nama_pasangan').text(data.nama_pasangan)
            })
    });


</script>
@endsection
