<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(redirect(base_url().'index.php/login'));
		}
	}
	public function index()
	{
		$data=$this->mymodel->Read("com");
		$this->load->view('review',array('data' => $data));
	}
	
	public function idelete($Id){
		$where = array('Id' => $Id);
		$res = $this ->mymodel->DeleteData('com',$where); 
		if($res>=1){
			redirect(base_url().'index.php/review');
		}

	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
?>