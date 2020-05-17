<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_controller{

    public function index(){
        
    }

    public function almaz() { 
        $data['konten'] = 'product/almaz';
        $this->load->view('template', $data);
    }

    public function formo() { 
        $data['konten'] = 'product/formo';
        $this->load->view('template', $data);
    }

    public function confero() { 
        $data['konten'] = 'product/confero';
        $this->load->view('template', $data);
    }

    public function cortez() { 
        $data['konten'] = 'product/cortez';
        $this->load->view('template', $data);
    }
}