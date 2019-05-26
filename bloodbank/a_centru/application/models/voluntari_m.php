<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class voluntari_m extends CI_Model {

	public function get_voluntari(){
		$this->db->select('*');
		$this->db->from('voluntari');
		$this->db->where('tip','voluntar');

		$query=$this->db->get();

		return $query->result();
	}

	public function delete_voluntar($id){
		$this->db->where('ID', $id);
		$this->db->delete('voluntari');
	}


}