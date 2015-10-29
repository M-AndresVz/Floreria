
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bookmarksModel extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
		
		
	}
	
	function _example_output($output = null)
	{
		$this->load->view('example.php',$output);	
	}
	
	function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}	

	function migaleria(){
		$carpeta = (string) $this->tank_auth->get_username();
		$campos = array('id' => array('type' => 'Int', 'constraint' => 11 , 'auto_increment' => TRUE),
						'title' =>	array('type' => 'Varchar', 'constraint' => 250),
						'url' =>	array('type' => 'Varchar', 'constraint' => 250),
						'priority' =>	array('type' => 'Int', 'constraint' => 11 , 'null' => TRUE), 
		
		);
		$this->db->add_field($campos);
		$this->db->create_table($carpeta,TRUE);
	}
	
	function example4()
	{
		$carpeta = (string) $this->tank_auth->get_username();
		
		$image_crud = new image_CRUD();
	
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_title_field('title');
		$image_crud->set_table('example_4')
		->set_ordering_field('priority')
		->set_image_path('assets/uploads/'.$carpeta);
			
		$output = $image_crud->render();
	
		$this->_example_output($output);
	}
	
	function simple_photo_gallery()
	{
		$carpeta = (string) $this->tank_auth->get_username();
		
		$image_crud = new image_CRUD();
		
		$image_crud->unset_upload();
		$image_crud->unset_delete();
		
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_table('example_4')
		->set_image_path('assets/uploads/'.$carpeta);
		
		$output = $image_crud->render();
		
		$this->_example_output($output);		
	}
	
	
}