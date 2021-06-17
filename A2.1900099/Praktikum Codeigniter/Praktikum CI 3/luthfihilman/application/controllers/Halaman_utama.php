<?php

class Halaman_utama extends CI_Controller
{
    public function Index()
    {
        $this->load->view('halaman_utama_v');
    }
}