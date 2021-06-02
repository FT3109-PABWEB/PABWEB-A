<?php

class Hello extends CI_Controller
{
    public function index ()
    {
        echo "Hello Mardira";
    }

    public function hello_model()
    {
        //memuat model
        $this->load->model('Hello_model');
        //mengakses function/metode di Model akan dipanggil melalui Controller
        $data = $this->Hello_model->hello_mardira();
        echo $data;
    }

    public function hello_view()
    {
        //Untuk menggunakan sebuah View di Controller
        $this->load->view('hello_view');
    }

    public function hello_mvc()
    {
        //load model
        $this->load->model('Hello_model');
        $data['mvc'] = $this->Hello_model->mardira_mvc();
        //mengakses function di Model melalui Controller dengan baris kode
        $this->load->view('hello_view',$data);
    }
}