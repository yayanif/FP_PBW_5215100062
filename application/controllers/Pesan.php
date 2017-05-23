<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function index()
	{
		{
		
		$data=$this->mymodel->Read("menu");
		$this->load->view('pesan',array('data' => $data));
	}
	}
	
	public function pesanan(){
		$Nama= $this->input->post('name');
		$Paket = $this->input->post('paket');
		$Jumlah= $this->input->post('jumlah');
		$Cp = $this->input->post('cp');
		$alm = $this->input->post('alamat');
		$pesan = array(
			'nama' => $Nama,
			'paket' => $Paket,
			'jumlah' => $Jumlah,
			'cp' => $Cp,
			'alamat' => $alm,
			);
		$res = $this->mymodel->Terima('pesan',$pesan);
		if($res>=1){
			$data['message'] =  'Terima kasih sudah memesan.';
			$this->load->view('notification_view', $data);
		}
		else{
			echo "<h2> GAGAL</h2>";
		}
		
	}
}
?>