<?php

class About extends Controller{

    public function index($nama ='Basanta' , $pekerjaan = 'Mahasiswa', $umur = 18)
    {

        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('about/index', $data);
        $this->view('templates/header');
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('about/page'); 
        $this->view('templates/header');
        $this->view('templates/footer');
        
    }
}