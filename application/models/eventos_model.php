<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class eventos_model extends CI_Model {
    

	public function nuevoEvento($data="")
	{
		$this->db->insert('eventos', $data);
        
        if($this->db->affected_rows()){
            return true;
        }else {
            return false;
        }
	}

    public function obtenerEventos(){

        $this->db->where('estado', 1);
        $this->db->order_by('fecha', 'desc');
        $this->db->order_by('hora', 'desc');
        $resultado = $this->db->get('eventos');
        return $resultado->result_array();

    }

    public function obtenerEvento($id=""){

        $this->db->where('id',$id);
        $this->db->limit(1);
        $resultado = $this->db->get('eventos');
        return $resultado->result_array();
    }

    public function editarEvento($id, $data){

        $this->db->where('id', $id);
        $this->db->set('nombre', $data['nombre']);
        $this->db->set('descripcion', $data['descripcion']);
        $this->db->set('fecha', $data['fecha']);
        $this->db->set('hora', $data['hora']);
        $this->db->update('eventos');

        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }

    public function eliminarEvento($id){

        $this->db->where('id', $id);
        $this->db->set('estado', 0);
        $this->db->update('eventos');

        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
}
