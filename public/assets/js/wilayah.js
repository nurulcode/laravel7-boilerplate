$(document).ready(function () {

    $.ajax({
        type: 'GET',
        url: '/provinsi',
        success: function (response) {
            $('#provinsi').append(`<option value="0" disabled selected>--Select--</option>`);
            response.forEach(element => {
                $('#provinsi').append(`<option value="${element['id']}">${element['nama']}</option>`);
            });
        }
    });

    $('#provinsi').on('change', function () {
        let id = $(this).val();
        $('#kabupaten').empty();
        $('#kabupaten').append(`<option value="0" disabled selected>Processing...</option>`);
        $.ajax({
            type: 'GET',
            url: '/kabupaten/' + id,
            success: function (response) {
                $('#kabupaten').empty();
                $('#kecamatan').empty();
                $('#kelurahan').empty();
                $('#kabupaten').append(`<option value="0" disabled selected>--Select--</option>`);
                response.forEach(element => {
                    $('#kabupaten').append(`<option value="${element['id']}">${element['nama']}</option>`);
                });
            }
        });
    });

    $('#kabupaten').on('change', function () {
        let id = $(this).val();
        $('#kecamatan').empty();
        $('#kelurahan').empty();
        $('#kecamatan').append(`<option value="0" disabled selected>Processing...</option>`);
        $.ajax({
            type: 'GET',
            url: '/kecamatan/' + id,
            success: function (response) {
                $('#kecamatan').empty();
                $('#kecamatan').append(`<option value="0" disabled selected>--Select--</option>`);
                response.forEach(element => {
                    $('#kecamatan').append(`<option value="${element['id']}">${element['nama']}</option>`);
                });
            }
        });
    });

    $('#kecamatan').on('change', function () {
        let id = $(this).val();
        $('#kelurahan').append(`<option value="0" disabled selected>Processing...</option>`);
        $.ajax({
            type: 'GET',
            url: '/kelurahan/' + id,
            success: function (response) {
                $('#kelurahan').empty();
                $('#kelurahan').append(`<option value="0" disabled selected>--Select--</option>`);
                response.forEach(element => {
                    $('#kelurahan').append(`<option value="${element['id']}">${element['nama']}</option>`);
                });
            }
        });
    });

});
