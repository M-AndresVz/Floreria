<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class productosModel extends CI_Model { 

	function __construct() {
    parent::__construct();
  }

  function guardar($data){
  	$this->db->insert('productos', $data);
  }



  function verTodo($limite = 0){
    $query = $this->db->get('productos');
    if ($query->num_rows() > 0){
      return $query;
    }else{
      return FALSE;
    }
  }
	function buscar($query) {
    $this->db->like('nombre', $query);
    $this->db->or_like('descripcion', $query);
    $this->db->or_like('imagen', $query);
    $this->db->or_like('precio', $query);
    $query = $this->db->get('productos');
    if ($query->num_rows() > 0){
      return $query;
    }else{
      return FALSE;
    }
  }

  function eliminarId($id){
    $this->db->where('id', $id);
    $this->db->delete('productos');
  }

  function totalResultados($query){
    $this->db->like('nombre', $query);
    $this->db->or_like('descripcion', $query);
    $this->db->or_like('imagen', $query);
    $this->db->or_like('precio', $query);
    $query = $this->db->get('productos');
    return $query->num_rows();
  }

  function obtenerEnlace($id){
    $this->db->where('id', $id);
    $query = $this->db->get('productos');
      if ($query->num_rows() > 0){
        return $query;
      }else{
        return FALSE;
      }
  }

  function editarEnlace($id, $data){
    $this->db->where('id', $id);
    $this->db->update('productos', $data);
  }
}