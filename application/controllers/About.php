<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$data=$this->mymodel->Read("com");
		$this->load->view('about',array('data' => $data));
	}
	
	public function upload(){
	
		$Nama= $this->input->post('name');
		$Com = $this->input->post('message');
		
		$rev = array(
			'Nama' => $Nama,
			'Com' => $Com,
			);
		$res = $this->mymodel->Terima('com',$rev);
		if($res>=1){
			$dat['message'] =  'Terima Kasih sudah melakukan review.';
			$this->load->view('notification_view', $dat);
		}
		else{
			$dat['message'] ='Your file was failed to upload';
			$this->load->view('notification_view', $dat);
		}
		
	
		
	}
}
?>