<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data=$this->mymodel->Read("menu");
		$this->load->view('home',array('data' => $data));
	}
}
?>