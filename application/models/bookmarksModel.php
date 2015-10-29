<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bookmarksModel extends CI_Model { 

	function __construct() {
    parent::__construct();
  }

  function guardar($data){
    $this->db->insert('empleadosfloreria',$data);
  }

  function verTodo($limite = 0){
    $query = $this->db->get('empleadosfloreria');
  	if ($query->num_rows() > 0){
  		return $query;
  	}else{
  		return FALSE;
  	}
  }
  //EL METODO DE ABAJO LO ESTOY BUSCANDO POR CUALQUIER NOMBRE EN LA TABLA EMPLEADO
function buscar($query){
  $this->db->like('nombrecompleto', $query);
  $this->db->or_like('usuario', $query);
  $this->db->or_like('password', $query);
  $this->db->or_like('direccion', $query);
  $this->db->or_like('telefono', $query);
  $this->db->or_like('sueldo', $query);
  $this->db->or_like('tipo_empleado', $query);
  $query = $this->db->get('empleadosfloreria');
  if ($query->num_rows()>0){
    return $query;
  }else{
    return FALSE;
  }
}


function todosusuarios(){
    $consulta = $this->db->get('users');
    
    if($consulta->num_rows > 0){
      return $consulta;
    } else {
      return FALSE;
    }
  }

  function eliminar($id){
    $this->db->where('id', $id);
    $this->db->delete('users');
  }
//Este metodo me elimina una tupla a partir del id
function eliminarId($id){
    $this->db->where('id', $id);
    $this->db->delete('empleadosfloreria');
  }

//Este metodo encontrara los resultados obtenidos en "buscar empleados"
  function totalResultados($query){
    $this->db->like('nombrecompleto',$query);
    $this->db->or_like('usuario',$query);
    $this->db->or_like('password',$query);
    $this->db->or_like('direccion',$query);
    $this->db->or_like('telefono',$query);
    $this->db->or_like('sueldo',$query);
    $this->db->or_like('tipo_empleado',$query);
    $query= $this->db->get('empleadosfloreria');
    return $query->num_rows();
  }

  function obtenerEnlace($id){
    $this->db->where('id', $id);
    //en esta linea voy a ver si es mi base de datos
    $query = $this->db->get('empleadosfloreria');
      if ($query->num_rows() > 0){
        return $query;
      }else{
        return FALSE;
      }
  }

//Esta funcion está editando a la tabla floreria
function editarEnlace($id, $data){
    $this->db->where('id', $id);
    $this->db->update('empleadosfloreria', $data);
  }

}