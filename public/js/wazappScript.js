$(function () {
    $('.tombolTambahData').on('click', function () {
        $('#mahasiswaModalLabel').html('Tambah Data Mahasiswa');
    });

    $('.tombolUbahData').on('click', function () {
        $('#mahasiswaModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Update Data');
        $('.modal-body form').attr('http://localhost/master-mvc/public/product');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/master-mvc/public/mahasiswa/update',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
            };
        });
    });
});