<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(redirect(base_url().'index.php/login'));
		}
	}

	public function index()
	{
		$data=$this->mymodel->Read("pesan");
		$this->load->view('order',array('data' => $data));
	}
	
	public function edit_data($Id){
		$pesan = $this->mymodel->getBarang($Id);
		$data = array(
			"Id" => $pesan[0]['Id'],
			"nama" => $pesan[0]['nama'],
			"paket" => $pesan[0]['paket'],
			"jumlah" => $pesan[0]['jumlah'],
			"cp" => $pesan[0]['cp'],
			"alamat" => $pesan[0]['alamat'],
			"status" => $pesan[0]['status']
			 );
			 
		$this->load->view('editpesan',$data);

	}
	
	public function do_update(){

		$Id = $_POST['id'];
		$status = $_POST['status'];
		$data_update = array('status' => $status);
		$where = array('Id' => $Id);
		$res = $this->mymodel->UpdateData('pesan', $data_update, $where);
		if($res>=1){
			redirect('order');
		}
	}
}
?>