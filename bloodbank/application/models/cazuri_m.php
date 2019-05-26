<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cazuri_m extends CI_Model {

	public function get_cazuri(){
		$this->db->select('*');
		$this->db->from('cazuri_publicate');
		
		$query=$this->db->get();

		return $query->result();
	}
	


	}
