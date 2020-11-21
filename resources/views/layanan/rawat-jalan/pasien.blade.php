@extends('layouts.global')
@section('title')
Pasien Manajement
@endsection

@section('content')
<x-app-card>
    <table id="table-pasien-rj" class="table table-bordered table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
@endsection

@section('javascript')
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let t = $('#table-pasien-rj').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('rawat-jalan.pasien') }}",
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


</script>
@endsection
