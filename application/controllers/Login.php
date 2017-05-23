<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('mymodel');
 
	}
	public function index()
	{
		$this->load->view('login');
		
	}
	
	
 
	function aksi_login(){
		$Id = $this->input->post('username');
		$Pass = $this->input->post('password');
		$where = array(
			'Id' => $Id,
			'Pass' => $Pass
			);
		$cek = $this->mymodel->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $Id,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
			
			redirect(base_url().'index.php/review');
			
		}else{
			redirect(base_url().'index.php/login');
		}
	}
 
	
}
?>