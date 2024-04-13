$(function(){
    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });



    $('. tampilModalUbah').on('click', function(){
    $('#formModalLabel').html('Ubah Data Mahasiswa');

    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');


        const id = $(this.data('id'));
       
        $.ajax({
            url: 'http://localhost/phpmvc/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            
            success: function(data){
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#prodi').val(data.prodi);
                $('#id').val(data.id);

            }

        });

    });



});