<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class index_m extends CI_Model {

 		public function get_evenimente(){
		$this->db->select('*');
		$this->db->from('campanii');
		$this->db->where('in_asteptare', '1');
		
		$query=$this->db->get();

		return $query->result();
	}
	

 }
 