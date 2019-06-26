<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class campanii_m extends CI_Model {

	public function get_campanii(){
		$this->db->select('*');
		$this->db->from('campanii');
		$this->db->where('in_asteptare', '1');
		$this->db->order_by('data','asc');

		
		$query=$this->db->get();

		return $query->result();
	}


	}
