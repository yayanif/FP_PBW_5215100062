<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Mymodel extends CI_Model{
	
		public function Read($table){
		
		$data=$this->db->query('select * from '.$table);
		return $data->result_array();	
		}
		
	public function getBarang($Id){

		$data = $this->db->query('select * from pesan where Id = '.$Id);
		return $data->result_array();
	}
	
	function cek_login($table,$where){		
		
		return $this->db->get_where($table,$where);
	}	
	
	public function Terima($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}
	
	
	public function UpdateData($tableName,$data,$where){
		$res = $this->db->update($tableName,$data,$where);
		return $res;
	}
	
	
	public function DeleteData($tableName,$data,$where){
		$res = $this->db->delete($tableName,$data,$where);
		return $res;
	}
	
}


?>