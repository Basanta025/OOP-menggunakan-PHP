<?php

class About{

    public function index($nama ='Basanta' , $pekerjaan = 'Mahasiswa', $umur = 18)
    {
        echo "Halo, nama saya $nama, saya seorang $pekerjaan. saya berumur $umur tahun.";
    }
    public function page()
    {
        echo 'About/page';
    }
}