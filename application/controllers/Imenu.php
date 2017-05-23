<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imenu extends CI_Controller {
function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url().'index.php/login');
		}
	}


public function index()
	{
		$data['message'] ="";
		$this->load->view('imenu',$data);
	}
	
public function d_upload(){
		
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_width']  = '327';
		$config['max_height']  = '155';

		$this->upload->initialize($config);

		//if upload failed
		if ( ! $this->upload->do_upload('upload')){
			$data['message'] =  $this->upload->display_errors();
			$this->load->view('imenu', $data);
		//if upload success
		}else{

			$data_insert = array(
					            'Paket' => $this->input->post('paket'),
					            'isi' => $this->input->post('isi'),
								'Harga' => $this->input->post('harga'),
					            'g' => $this->upload->data('file_name')
					        );
			//query to insert into myupload table
			$res = $this->mymodel->Terima('menu', $data_insert);
			$this->load->view(redirect('menu'));
			
		}
	}	
	
}