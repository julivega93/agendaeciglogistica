<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {

    protected $data = array();

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('eventos_model');
        $this->load->helper('date');

        
    }
	public function index()
	{
            $this->load->view('Navbar/nav');
            $this->load->view('Eventos/registrarEvento');
       
	}

    public function nuevoEvento(){
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|max_length[16]');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
        $this->form_validation->set_rules('fecha', 'Fecha', 'required');
        $this->form_validation->set_rules('hora', 'Hora', 'required');

        if($this->form_validation->run() == FALSE){
            
                $this->load->view('Navbar/nav');
                $this->load->view('Eventos/registrarEvento');
            //redirect('Eventos');
        }else{

            $data['nombre'] = $this->input->post('nombre');
            $data['descripcion'] = $this->input->post('descripcion');
            $data['fecha'] = $this->input->post('fecha');
            $data['hora'] = $this->input->post('hora');

            $query = $this->eventos_model->nuevoEvento($data);

            if($query){
                $this->datos = $this->session->set_tempdata('exito','Evento agregado correctamente',1);
                $this->load->view('Navbar/nav');
                $this->load->view('Eventos/registrarEvento',$this->datos);
            }else{
                echo 'ha habido un error';
            }
        }
    }

    public function listarEventos(){
        $this->datos['eventos'] = $this->eventos_model->obtenerEventos();
        $this->load->view('Navbar/nav',$this->datos);
        $this->load->view('Eventos/listarEventos',$this->datos);
    }

    public function obtenerEvento($id=false){

        $this->datos['evento'] = $this->eventos_model->obtenerEvento($id);
        $this->load->view('Navbar/nav',$this->datos);
        $this->load->view('Eventos/editarEvento',$this->datos);
    }

    public function editarEvento($id=false){

        $data = array();
        $data['nombre'] = $this->input->post('nombre');
        $data['descripcion'] = $this->input->post('descripcion');
        $data['fecha'] = $this->input->post('fecha');
        $data['hora'] = $this->input->post('hora');

        $resultado = $this->eventos_model->editarEvento($id, $data);
        
        if($resultado){
            redirect('Eventos/listarEventos/');
        }
    }

    public function eliminarEvento($id=""){
        
        $query = $this->eventos_model->eliminarEvento($id);
        if($query){
            redirect('Eventos/listarEventos');
        }
    }
}
