<?php
defined ('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller{

    function __construct(){
        parent::__construct();
        
    }

    public function index(){
        $data['judul'] = "Halaman Depan" ;
        $this->load->view('web_header',$data);
        $this->load->view('web_index',$data);
        $this->load->view('web_footer',$data);
    }

    public function about(){
        $data['judul'] = "Halaman About" ;
        $this->load->view('web_header',$data);
        $this->load->view('web_about',$data);
        $this->load->view('web_footer',$data);
    }
}