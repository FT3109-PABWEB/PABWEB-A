<?php

class Hello extends CI_Controller
{
    public  function index()
    {
        echo "Hello Zen";
    }

    public  function hello_model()
    {
        $this->load->model('Hello_model');
        $data = $this->Hello_model->hello_zen();
        echo $data;
    }

    public  function hello_view()
    {
        $this->load->view('Hello_view');
    }

    public  function hello_mvc()
    {
        $this->load->model('Hello_model');
        $data['mvc'] = $this->Hello_model->zen_mvc();
        $this->load->view('Hello_view',$data);
    }
}