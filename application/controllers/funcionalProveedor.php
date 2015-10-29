<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class funcionalProveedor extends CI_Controller { 

	function __constructor() {
		parent::__constructor();	
	}

	public function index() {	
		$this->load->view('headers/librerias');
		$this->load->view('funcionalProveedor/main');
		$this->load->view('footer');
	}

	public function eliminar(){	
		$this->load->model('ProveedorModel');
		$id = $this->uri->segment(3);
		if ($id){
			$this->ProveedorModel->eliminarId($id);
			redirect('main/verProveedores');
		}
		
	}

	public function editarProveedor(){
	$this->load->model('ProveedorModel');
	$id = $this->uri->segment(3);
	$obtenerEnlace = $this->ProveedorModel->obtenerEnlace($id);

		if ($obtenerEnlace != FALSE){
			foreach ($obtenerEnlace -> result() as $row){
				$nombrecompleto = $row->nombreCompleto;
				$direccion = $row->direccion;
				$telefono = $row->telefono;
				$movil = $row->movil;
				$correo = $row->correo;
				
			}

			$data = array(
				'id' => $id,
				'nombrecompleto' => $nombrecompleto,
				'direccion' => $direccion,
				'telefono' => $telefono,
				'movil' => $movil,
				'correo' => $correo,
				
			);
		}else{
			$data = '';
			return FALSE;
		}

		$this->load->view('headers/librerias');
		$this->load->view('editarProveedor', $data);
		$this->load->view('footer');
	}

	function editarEnlace(){
		$this->load->model('ProveedorModel');
		$id = $this->uri->segment(3);
		$data = array(
			'nombreCompleto' => $this->input->post('nombrecompleto', true),
			'direccion' => $this->input->post('direccion', true),
			'telefono' => $this->input->post('telefono', true),
			'movil' => $this->input->post('movil', true),
			'correo' => $this->input->post('correo', true),
		);

		$this->ProveedorModel->editarEnlace($id, $data);
		redirect('main/verProveedores');

	}
}
