<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class cookie_m extends CI_Model {

	function get_date($id)
	{
		$this->db->select('data');
		$this->db->from('campanii');
		$this->db->where('ID', $id);
		
		$query=$this->db->get();

		return $query->result();
	}

	function get_participanti($id)
	{
		$this->db->select('*');
		$this->db->from('campanii');
		$this->db->where('ID', $id);
		
		$query=$this->db->get();

		return $query->result();
	}

	function participanti($id,$participanti)
	{

		$data = [
            'participanti' => $participanti,
        ];
		$this->db->where('ID',$id);
		$this->db->update('campanii',$data);
	}

	

 }
 