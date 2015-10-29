<?php
class users_modelo extends CI_Model {
 
    function __construct(){
        parent::__construct();
    }
 
    /* Devuelve la lista de alumnos que se encuentran en la tabla tblalumno */
    function obtenerListaUsuarios(){
        $this->load->database();
        $usuarios = $this->db->get('users');
        return $usuarios->result();   
    }   
}
?>;

