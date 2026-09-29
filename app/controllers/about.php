<?php

class About extends Controllers {
    public function index($nama = 'Dono', $pekerjaan = 'Pelawak') 
    {
       
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('About/index', $data);
        $this->view('templates/footer');
    }
    
    public function page() 
    {
        
         $data['judul'] = 'My Pages';
        $this->view('templates/header', $data);
        $this->view('About/page', $data);
        $this->view('templates/footer');
    }
}