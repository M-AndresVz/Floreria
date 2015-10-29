<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bookmarks extends CI_Controller { 

	function __constructor() {
		parent::__constructor();	
	}

	public function index() {	
		$this->load->view('headers/librerias');
		$this->load->view('bookmarks/main');
		$this->load->view('footer');
	}

	public function eliminar(){	
		$this->load->model('bookmarksModel');
		$id = $this->uri->segment(3);
		if ($id){
			$this->bookmarksModel->eliminarId($id);
			redirect('main/verEmpleados');
		}
		
	}

	public function editar(){
		$this->load->model('bookmarksModel');
		$id = $this->uri->segment(3);
		$obtenerEnlace = $this->bookmarksModel->obtenerEnlace($id);

		if ($obtenerEnlace != FALSE){
			foreach ($obtenerEnlace -> result() as $row){
				$nombrecompleto = $row->nombrecompleto;
				$usuario = $row->usuario;
				$password = $row->password;
				$direccion = $row->direccion;
				$telefono = $row->telefono;
				$sueldo = $row->sueldo;
				$tipo_empleado = $row->tipo_empleado;
				
			}

			$data = array(
				'id' => $id,
				'nombrecompleto' => $nombrecompleto,
				'usuario' => $usuario,
				'password' => $password,
				'direccion' => $direccion,
				'telefono' => $telefono,
				'sueldo' => $sueldo,
				'tipo_empleado' =>$tipo_empleado
				
			);
		}else{
			$data = '';
			return FALSE;
		}

		$this->load->view('headers/librerias');
		$this->load->view('editar_empleado', $data);
		$this->load->view('footer');
	}

function editarEnlace(){
		$this->load->model('bookmarksModel');
		$id = $this->uri->segment(3);
		$data = array(
			'nombrecompleto' => $this->input->post('nombrecompleto', true),
			'usuario' => $this->input->post('usuario', true),
			'password' => $this->input->post('password', true),
			'direccion' => $this->input->post('direccion', true),
			'telefono' => $this->input->post('telefono', true),
			'sueldo' => $this->input->post('sueldo', true),
			'tipo_empleado' => $this->input->post('tipo_empleado',true)
			
		);

		$this->bookmarksModel->editarEnlace($id, $data);
		redirect('main/verEmpleados');

	}

	
}
/* End of file main.php */
/* Location: ./application/controllers/main.php */