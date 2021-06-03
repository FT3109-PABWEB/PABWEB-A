<?php

function cek_session()
{
    $CI = &get_instance();
    $session = $CI->session->userdata('emali');
    if ($session == NULL){
        redirect('login');
    }
}