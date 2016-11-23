<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    private $pokemon;

    public function __construct() {
        parent::__construct();
        $this->load->model("Listar", "listar");
        $this->pokemon = $this->listar->listar();
    }

    public function index() {
        $this->load->helper('text');
        $info['pokemon'] = $this->pokemon;
        $this->load->view('html-header');
        $this->load->view('header', $info);
        $this->load->view('home', $info);
        $this->load->view('footer');
        $this->load->view('html-footer');
    }

    
}
