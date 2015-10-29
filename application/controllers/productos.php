<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class productos extends CI_Controller { 

	function __constructor() {
		parent::__constructor();	
	}

	public function index() {	
		$this->load->view('headers/librerias');
		$this->load->view('productos/main');
		$this->load->view('footer');
	}

	public function eliminarFlores(){	
		$this->load->model('productosModel');
		$id = $this->uri->segment(3);
		if ($id){
			$this->productosModel->eliminarId($id);
			redirect('main/verFlores');
		}
		
	}

	public function editarFlores(){
		$this->load->model('productosModel');
		$id = $this->uri->segment(3);
		$obtenerEnlace = $this->productosModel->obtenerEnlace($id);

		if ($obtenerEnlace != FALSE){
			foreach ($obtenerEnlace -> result() as $row){
				$nombre = $row->nombre;
				$imagen = $row->imagen;
				$descripcion = $row->descripcion;
				$precio = $row->precio;				
			}

			$data = array(
				'id' => $id,
				'nombre' => $nombre,
				'imagen' => $imagen,
				'descripcion' => $descripcion,
				'precio' => $precio				
			);
		}else{
			$data = '';
			return FALSE;
		}

		$this->load->view('headers/librerias');
		$this->load->view('editarFlores', $data);
		$this->load->view('footer');
	}

	function editarEnlace(){
		$this->load->model('productosModel');
		$id = $this->uri->segment(3);
		$data = array(
			'nombre' => $this->input->post('nombre', true),
			'imagen' => $this->input->post('imagen', true),
			'descripcion' => $this->input->post('descripcion', true),
			'precio' => $this->input->post('precio', true),
			
		);

		$this->productosModel->editarEnlace($id, $data);
		redirect('main/verFlores');

	}

	
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */