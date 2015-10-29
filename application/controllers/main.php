<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('bookmarksModel');
		$this->load->model('productosModel');
		$this->load->model('ProveedorModel');
	}

	public function index()
	{
		
		if ($this->tank_auth->is_logged_in()) {
			$this->load->view('headers/librerias');  
			$this->load->view('principalregistrado');   //al iniciar sesion, muestra la vista principal del usuario registrado
			$this->load->view('footer');
		}else{
			redirect('auth/login');
		}
		
	} 


	
/* * * * * * * * * * * * * * * * * Funciones del usuario invitado * * * * * * * * * * * * * * * * * * */
public function invitado()          //carga la pagina principal del invitado
	{
		$this->load->view('headers/librerias');  
		$this->load->view('principalinvitado');
		$this->load->view('headers/menuinvitado');    //menu del usuario invitado
		$this->load->view('footer');		
	}
	



 	public function inventarioInvitado(){		
		$data = array(
			'enlaces' => $this->bookmarksModel->verTodo(),
			//'dump'    => 0
		);
		$this->load->view('headers/librerias');
		$this->load->view('productosinvitado', $data);
		$this->load->view('footer');
	}

/* * * * * * * * * * * * * * * * * Funciones del administrador * * * * * * * * * * * * * * * * * * */

	public function principaladmin()          //carga la pagina principal del invitado
	{
		$this->load->view('headers/librerias');  
		$this->load->view('principaladmin');
		$this->load->view('headers/menuadmin');   
		$this->load->view('footer');		
	}
	
	public function admin(){       //primero llama la vista donde iniciará sesion el administrador
		
		$this->load->view('headers/librerias');
		$this->load->view('inicioadmin');         //inicia sesion el administrador
		$this->load->view('footer');
	}
	
	public function verificardatos(){
		
		
		if( isset($_POST['usuario']) && !empty($_POST['usuario'])  &&
			isset($_POST['contra']) && !empty($_POST['contra']) ) {
			
			if($_POST['usuario'] == 'admin' && $_POST['contra'] == '1234'){
				$this->load->view('headers/librerias');
				$this->load->view('principaladmin');
				$this->load->view('footer');
			
			
			} else {
				$this->load->view('headers/librerias');
				$this->load->view('inicioadmin');         //inicia sesion el administrador
				$this->load->view('footer');
				echo "Datos incorrectos";
			}	
		} else {
			$this->load->view('headers/librerias');
			$this->load->view('inicioadmin');         //inicia sesion el administrador
			$this->load->view('footer');
			echo "Debes llenar todos los campos";
		}
		
	}

	public function verusuarios(){      //el administrador ve todos los usuarios
		$data = array(
			'enlaces' => $this->bookmarksModel->todosusuarios(),
			'dump'=>0
		);
		$this->load->view('headers/librerias');  
		$this->load->view('usuarios', $data);      //vista donde carga todo los usuario registrados
		$this->load->view('footer');
	}
	
	

	public function eliminarusuario()           //donde el administrador elimina usuarios
	{
		
			$id = $this->uri->segment(3);
			$this->bookmarksModel->eliminar($id);
			redirect('main/verusuarios');
	}

	

	public function verAdmi()       
	{
	
			$this->load->view('headers/librerias');
			$this->load->view('verAdmi');             //donde el usuario invitado ve las galerias
			//$this->load->view('footer');
	
	}

	// ----------- funciones de pelicula--------------


	public function agregar() {
		
			$this->load->view('headers/librerias');
			$this->load->view('agregar');
			$this->load->view('footer');
		}


    public function verEmpleados(){		
		$data = array(
			'enlaces' => $this->bookmarksModel->verTodo(),
			//'dump'    => 0
		);
		$this->load->view('headers/librerias');
		$this->load->view('verAdmi', $data);
		$this->load->view('footer');
	}

	public function validaciones(){
			$this->load->view('headers/librerias');
			$this->load->view('validaciones');
			$this->load->view('footer');
	}


	//-----------------------------------------------------
	//-----------------------------------------------------
	//-----------------------------------------------------
	//-----------------------------------------------------
	public function agregarFlores() {
		$this->load->view('headers/librerias');
		$this->load->view('agregarFlores');
		$this->load->view('footer');
	}
	public function guardarFlores() {
		$data = array(
			'nombre'=> $this->input->post('nombre',TRUE),
			'descripcion'=> $this->input->post('descripcion', TRUE),
			'imagen'=> $this->input->post('imagen', TRUE),
			'precio'=> $this->input->post('precio', TRUE)
		);

		$this->productosModel->guardar($data);
		redirect('main/agregarflores');
	}
    

    public function verFlores(){		
		$data = array(
			'enlaces' => $this->productosModel->verTodo(),
			//'dump'    => 0
		);
		$this->load->view('headers/librerias');
		$this->load->view('verCatalogo', $data);
		$this->load->view('footer');
	}

/********************FUNCIONES PARA LOS EMPLEADOS**************************
	***************************************************************************
	***************************************************************************
	***************************************************************************/


	public function agregar_empleado() {
			$this->load->view('headers/librerias');
			$this->load->view('agregar_empleado');
			//$this->load->view('agregar');
			$this->load->view('footer');
		}
	//GUARDAR PARA MIS EMPLEADOS
	public function guardar(){
		$data = array(
			'nombrecompleto' => $this->input->post('nombrecompleto',TRUE),
			'usuario' => $this->input->post('usuario',TRUE),
			'password' => $this->input->post('password',TRUE),
			'direccion' => $this->input->post('direccion',TRUE),
			'telefono' => $this->input->post('telefono',TRUE),
			'sueldo' => $this->input->post('sueldo',TRUE),
			'tipo_empleado' => $this->input->post('tipo_empleado',TRUE)
			);
			$this->bookmarksModel->guardar($data);
			redirect('main/agregar_empleado');
	}
	public function buscar_empleado(){
		$data = array();
		$query = $this->input->get('query', TRUE);
		if ($query) {
			$result = $this->bookmarksModel->buscar(trim($query)); //trim es para quitar espacios en blanco
			$total = $this->bookmarksModel->totalResultados(trim($query));
			if ($result != FALSE){
				$data = array(
					'result' => $result,
					'total'  => $total
				);
			}else {
				$data = array('result' => '', 'total' => $total);
			}	
		}else{
			$data = array('result' => '', 'total' => 0);
		}
		$this->load->view('headers/librerias');
		$this->load->view('buscar_empleado', $data);
		$this->load->view('footer');
	}
	//FUNCIONES DEL PROVEEDOR POR OLMOS
	public function agregarProveedor() {
			$this->load->view('headers/librerias');
			$this->load->view('agregarProveedor');
			$this->load->view('footer');
		}
	public function guardarProveedor(){
		$data =  array (
			'nombreCompleto' => $this->input->post('nombrecompleto',TRUE),
			'direccion' =>$this->input->post('direccion',TRUE),
			'telefono' => $this->input->post('telefono',TRUE),
			'movil' =>$this->input->post('movil',TRUE),
			'correo' =>$this->input->post('correo',TRUE)
			);
			$this->ProveedorModel->guardar($data);
			redirect('main/agregarProveedor');
	}

	 public function verProveedores(){		
		$data = array(
			'enlaces' => $this->ProveedorModel->verTodo(),
		);
		$this->load->view('headers/librerias');
		$this->load->view('verProveedores', $data);
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/main.php */