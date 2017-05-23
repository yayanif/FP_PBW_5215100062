<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url().'index.php/login');
		}
	}

	public function index()
	{
		
		$data=$this->mymodel->Read("menu");
		$this->load->view('menu',array('data' => $data));
	}
	
	public function do_delete($Paket){
		$where = array('Paket' => $Paket);
		$res = $this ->mymodel->DeleteData('menu',$where); 
		if($res>=1){
			redirect(base_url().'index.php/menu');
		}

	}
	
}
?>