<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    protected $data = array();

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('eventos_model');
        
    }
	public function index()
	{
        $this->datos['eventos'] = $this->eventos_model->obtenerEventos();
        $this->load->view('Navbar/nav',$this->datos);
        $this->load->view('Portada/Inicio',$this->datos);
	}

    public function obtenerEventos(){
        
        

    }
}
