<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class spitale_m extends CI_Model {

	function get_cereri_spitale(){
		$this->db->select('*');
		$this->db->from('spitale');
		$this->db->where('activ','0');

		$query=$this->db->get();

		return $query->result();
	}

	function get_spitale_active(){
		$this->db->select('*');
		$this->db->from('spitale');
		$this->db->where('activ','1');

		$query=$this->db->get();

		return $query->result();
	}

	public function make_active($id_spital)
	{
		$this->db->select('activ');
		$this->db->from('spitale');
		$this->db->where('ID',$id_spital);
		$this->db->set('activ','1');
		$this->db->update('spitale');

	}

	public function delete($id_spital)
	{
		$this->db->where('ID', $id_spital);
		$this->db->delete('spitale');
	}

	}