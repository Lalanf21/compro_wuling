<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_controller{

    public function index(){
        $data['konten'] = 'promo';
        $this->load->view('template', $data);
    }
}