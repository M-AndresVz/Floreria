<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProveedorModel extends CI_Model { 

	function __construct() {
    parent::__construct();
  }

   function guardar($data){
    $this->db->insert('proveedores',$data);
  }

  function verTodo($limite = 0){
    $query = $this->db->get('proveedores');
  	if ($query->num_rows() > 0){
  		return $query;
  	}else{
  		return FALSE;
  	}
  }

  function eliminarId($id){
    $this->db->where('id', $id);
    $this->db->delete('proveedores');
  }

    function obtenerEnlace($id){
    $this->db->where('id', $id);
    $query = $this->db->get('proveedores');
      if ($query->num_rows() > 0){
        return $query;
      }else{
        return FALSE;
      }
  }

  function editarEnlace($id, $data){
    $this->db->where('id', $id);
    $this->db->update('proveedores', $data);
  }
  
}