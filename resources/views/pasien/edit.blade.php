@extends('layouts.global')
@section('title')
User Manajement
@endsection

@section('content')
<x-app-card>
    <x-slot name="title">
        <div class="row align-items-center mt-0">
            <div class="col-md-6 d-none d-md-block ">
                <small class="font-16 mt-0 align-middle text-capitalize  text-primary">registrasi pasien baru</small>
            </div>
        </div>
    </x-slot>

    <form id="form" name="form">

        <input type="hidden" id="id" name="id">

        <div class="form-row">
            <div class="form-group col-md-2">
                <label class=" font-weight-bold text-capitalize">Nomor Rekam Medis</label>
                <input readonly name="no_rekam_medis" id="no_rekam_medis" value="" type="text" class="form-control">
                <small class="text-danger no_rekam_medis"></small>
            </div>
            <div class="form-group col-md-4">
                <label class=" font-weight-bold text-capitalize">Nama Lengkap</label>
                <input placeholder="Kolom Nama" name="nama" id="nama" value="" type="text" class="form-control">
                <small class="text-danger nama"></small>
            </div>
            <div class="form-group col-md-3">
                <label class=" font-weight-bold text-capitalize">Tempat Lahir</label>
                <input placeholder="Kolom Tempat Lahir" name="tempat_lahir" id="tempat_lahir" value="" type="text" class="form-control">
                <small class="text-danger tempat_lahir"></small>
            </div>

            <div class="form-group col-md-3">
                <label class=" font-weight-bold text-capitalize">Tanggal Lahir</label>
                <div>
                    <div class="input-group">
                        <input name="tanggal_lahir" value="" type="text" class="form-control" placeholder="mm/dd/yyyy" data-date-format='yyyy-mm-dd' id="datepicker-autoclose1" autocomplete="off" autocomplete="off">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="mdi mdi-calendar"></i>
                            </span>
                        </div>
                        <small class="text-danger tanggal_lahir"></small>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label class=" font-weight-bold text-capitalize">pekerjaan</label>
                <input placeholder="Kolom Isian" name="pekerjaan" id="pekerjaan" value="" type="text" class="form-control">
                <small class="text-danger pekerjaan"></small>
            </div>
            <div class="form-group col-md-3">
                <label class=" font-weight-bold text-capitalize">telepon</label>
                <input placeholder="Kolom Isian" name="telepon" id="telepon" value="" type="text" class="form-control">
                <small class="text-danger telepon"></small>
            </div>
            <div class="form-group col-md-6">
                <label class=" font-weight-bold text-capitalize">alamat</label>
                <input placeholder="Kolom Isian" name="alamat" id="alamat" value="" type="text" class="form-control">
                <small class="text-danger alamat"></small>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label class=" font-weight-bold text-capitalize">Jenis Identitas</label>
                <input placeholder="Kolom Isian" name="jenis_identitas" id="jenis_identitas" value="" type="text" class="form-control">
                <small class="text-danger jenis_identitas"></small>
            </div>
            <div class="form-group col-md-3">
                <label class=" font-weight-bold text-capitalize">Nomor Identitas</label>
                <input placeholder="Kolom Isian" name="nomor_identitas" id="nomor_identitas" value="" type="text" class="form-control">
                <small class="text-danger nomor_identitas"></small>
            </div>
            <div class="input-group col-md-2">
                <label class=" font-weight-bold text-capitalize">Tinggi Badan</label>
                <div class="form-group input-group">
                    <input class="form-control" type="text" name="tinggi_badan" id="tinggi_badan" placeholder="170">
                    <div class="input-group-append">
                        <span class="input-group-text">Cm</span>
                    </div>
                    <small class="text-danger tinggi_badan"></small>
                </div>
            </div>
            <div class="input-group col-md-2">
                <label class=" font-weight-bold text-capitalize">Berat Badan</label>
                <div class="form-group input-group">
                    <input class="form-control" type="text" name="berat_badan" id="berat_badan" placeholder="80">
                    <div class="input-group-append">
                        <span class="input-group-text">Kg</span>
                    </div>
                    <small class="text-danger berat_badan"></small>
                </div>
            </div>
            <div class="form-group col-md-2">
                <label class=" font-weight-bold text-capitalize">Golongan Darah</label>
                <input placeholder="Kolom Isian" name="golongan_darah" id="golongan_darah" value="" type="text" class="form-control">
                <small class="text-danger golongan_darah"></small>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label class=" font-weight-bold control-label text-capitalize">jenis kelamin</label>
                <select class="form-control text-uppercase select2" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="" >--Pilih--</option>
                        @foreach(App\Enums\JenisKelamin::asSelectArray() as $key => $v)
                            <option  value="{{ $key }}" {{ $key == $pasien->jenis_kelamin ? 'selected' : '' }}>{{ $v }}</option>
                        @endforeach
                </select>
                </select>
                <small class="text-danger jenis_kelamin"></small>
            </div>

            <div class="form-group col-md-2">
                <label class=" font-weight-bold control-label text-capitalize">Agama</label>
                <select class="form-control text-uppercase select2" id="agama" name="agama">
                    <option value="" >--Pilih--</option>
                        @foreach(App\Enums\Agama::asSelectArray() as $key => $v)
                            <option  value="{{ $key }}" {{ $key == $pasien->agama ? 'selected' : '' }}>{{ $v }}</option>
                        @endforeach
                </select>
                <small class="text-danger agama"></small>
            </div>
            <div class="form-group col-md-2">
                <label class=" font-weight-bold control-label text-capitalize">Pendidikan</label>
                <select class="form-control text-uppercase select2" id="pendidikan" name="pendidikan">
                    <option value="" >--Pilih--</option>
                        @foreach(App\Enums\Pendidikan::asSelectArray() as $key => $v)
                            <option  value="{{ $key }}" {{ $key == $pasien->pendidikan ? 'selected' : '' }}>{{ Str::upper($v) }}</option>
                        @endforeach
                </select>
                <small class="text-danger pendidikan"></small>
            </div>

            <div class="form-group col-md-3">
                <label class=" font-weight-bold control-label text-capitalize">status Pernikahan</label>
                <select class="form-control text-uppercase select2" id="status_pernikahan" name="status_pernikahan">
                    <option value="" >--Pilih--</option>
                        @foreach(App\Enums\StatusPernikahan::asSelectArray() as $key => $v)
                            <option  value="{{ $key }}" {{ $key == $pasien->status_pernikahan ? 'selected' : '' }}>{{ $v }}</option>
                        @endforeach
                </select>
                <small class="text-danger status_pernikahan"></small>
            </div>

            <div class="form-group col-md-3">
                <label class=" font-weight-bold control-label text-capitalize">Suku</label>
                <select class="form-control select2" name="suku_id" placeholder="Select Suku" id="suku"></select>
                <small class="text-danger suku"></small>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label class=" font-weight-bold text-capitalize">Provinsi</label>
                <select class="form-control select2" name="provinsi" placeholder="Select Provinsi" id="provinsi"></select>
                <small class="text-danger provinsi"></small>
            </div>
            <div class="form-group col-md-3">
                <label class=" font-weight-bold text-capitalize">Kebupaten</label>
                <select class="form-control select2" name="kabupaten" placeholder="Select Kabupaten" id="kabupaten"></select>
                <small class="text-danger kabupaten"></small>
            </div>
            <div class="form-group col-md-3">
                <label class=" font-weight-bold text-capitalize">Kecamatan</label>
                <select class="form-control select2" name="kecamatan" placeholder="Select Kecamatan" id="kecamatan"></select>
                <small class="text-danger kecamatan"></small>
            </div>
            <div class="form-group col-md-3">
                <label class=" font-weight-bold text-capitalize">Kelurahan</label>
                <select class="form-control select2" name="kelurahan_id" placeholder="Select Kelurahan" id="kelurahan"></select>
                <small class="text-danger kelurahan"></small>
            </div>
        </div>

        <hr>
        <p class="font-16 mb-2 mt-0 text-capitalize text-primary">data keluarga</p>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label class=" font-weight-bold text-capitalize">nama ayah</label>
                <input placeholder="Kolom Isian" name="nama_ayah" id="nama_ayah" value="" type="text" class="form-control">
                <small class="text-danger nama_ayah"></small>
            </div>
            <div class="form-group col-md-3">
                <label class=" font-weight-bold text-capitalize">nama ibu</label>
                <input placeholder="Kolom Isian" name="nama_ibu" id="nama_ibu" value="" type="text" class="form-control">
                <small class="text-danger nama_ibu"></small>
            </div>
            <div class="form-group col-md-3">
                <label class=" font-weight-bold text-capitalize">nama pasangan</label>
                <input placeholder="Kolom Isian" name="nama_pasangan" id="nama_pasangan" value="" type="text" class="form-control">
                <small class="text-danger nama_pasangan"></small>
            </div>
            <div class="form-group col-md-3">
                <label class=" font-weight-bold text-capitalize">telepon keluarga</label>
                <input placeholder="Kolom Isian" name="telepon_keluarga" id="telepon_keluarga" value="" type="text" class="form-control">
                <small class="text-danger telepon_keluarga"></small>
            </div>
        </div>

        <div class="form-group">
            <label class=" font-weight-bold text-capitalize">alamat keluarga</label>
            <textarea name="alamat_keluarga" id="alamat_keluarga" class="form-control" rows="3"></textarea>
            <small class="text-danger alamat_keluarga"></small>
        </div>

        <hr>
        <div class="form-group mb-0 text-right">
            <div>
                <button type="submit" class="btn btn-primary waves-effect waves-light pr-5 pl-5" id="button-submit">Submit</button>
            </div>
        </div>
    </form>
</x-app-card>
@endsection

@section('javascript')

<script>
    const pasien = {!! $pasien !!}
    $(function () {
        $("#datepicker-autoclose1").datepicker({
            autoclose: !0,

        });
    });

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.get('/pasien/'+ pasien.id +'/detail',
            function (data) {
                dataPribadi(data.data, false)
            })
    });

    function dataPribadi(data, err) {
        let status = '.'
        if (!err) {
            $('#id').val(data.id)
            $('#no_rekam_medis').val(data.no_rekam_medis)
            $('#agama').val(data.agama)
            $('#alamat').val(data.alamat)
            $('#alamat_keluarga').val(data.alamat_keluarga)
            $('#berat_badan').val(data.berat_badan)
            $('#jenis_identitas').val(data.jenis_identitas)
            $('#nama').val(data.nama)
            $('#nama_ayah').val(data.nama_ayah)
            $('#nama_ibu').val(data.nama_ibu)
            $('#nama_pasangan').val(data.nama_pasangan)
            $('#nomor_identitas').val(data.nomor_identitas)
            $('#pekerjaan').val(data.pekerjaan)
            $('#pendidikan').val(data.pendidikan)
            $('#status_pernikahan').val(data.status_pernikahan)
            $('#datepicker-autoclose1').val(data.tanggal_lahir)
            $('#telepon').val(data.telepon)
            $('#tempat_lahir').val(data.tempat_lahir)
            $('#tinggi_badan').val(data.tinggi_badan)
            $('#telepon_keluarga').val(data.telepon_keluarga)
            $('#jenis_kelamin').val(data.jenis_kelamin)
            $('#suku').val(data.suku)
            $('#golongan_darah').val(data.golongan_darah)
        } else {
            $('.id').text(data.id ?? '')
            $('.no_rekam_medis').text(data.no_rekam_medis ?? '')
            $('.alamat').text(data.alamat ?? '')
            $('.nama').text(data.nama ?? '')
            $('.nama_ibu').text(data.nama_ibu ?? '')
            $('.tanggal_lahir').text(data.tanggal_lahir ?? '')
            $('.tempat_lahir').text(data.tempat_lahir ?? '')
            $('.jenis_kelamin').text(data.jenis_kelamin ?? '')
        }
    }



    if ($("#form").length > 0) {
        $("#form").validate({
            submitHandler: function (e) {
                var actionType = $('#button-submit').val();
                $.ajax({
                    data: $('#form')
                        .serialize(),
                    url: "/pasien/"+ pasien.id ,
                    type: "PUT",
                    dataType: 'json',
                    success: function (data) {
                        $('#button-submit').html('Simpan');
                        $('#button-submit').prop('disabled', true);
                        toast(data);
                        setInterval(() => {
                            $('#form').trigger("reset");
                            window.location.href = '{{ route('pasien.index') }}';
                        }, 1000);
                    },
                    error: function (response) {
                        console.log(response);

                        let errors = response.responseJSON.errors
                        $('#no_rekam_medis').focus();
                        dataPribadi(errors, true)
                        $('#button-submit').html('Simpan');
                    }
                });
            }
        })
    }
</script>

<script src="{{ asset('assets\js\wilayah.js') }}"></script>

@endsection
