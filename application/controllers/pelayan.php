<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayan extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        //$this->load->model('model_pelanggan');
        //cek_session();
    }
    
    public function index(){
        //$this->template->load('template','login');
        $this->load->view('login');
    }
}