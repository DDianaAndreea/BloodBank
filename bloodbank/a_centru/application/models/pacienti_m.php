<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pacienti_m extends CI_Model {


	function get_cereri_pacienti(){
		$this->db->select('*');
		$this->db->from('pacienti');
		$this->db->where('activ','0');

		$query=$this->db->get();

		return $query->result();
	}

	function get_pacienti_activi(){
		$this->db->select('*');
		$this->db->from('pacienti');
		$this->db->where('activ','1');

		$query=$this->db->get();

		return $query->result();
	}

	public function make_active($id_pacient)
	{
		$this->db->select('activ');
		$this->db->from('pacienti');
		$this->db->where('ID',$id_pacient);
		$this->db->set('activ','1');
		$this->db->update('pacienti');

	}

	public function delete($id_pacient)
	{
		$this->db->where('ID', $id_pacient);
		$this->db->delete('pacienti');
	}

	public function get_info_pacient($id_pacient){
		
		$this->db->select('*');
		$this->db->from('pacienti');
		$this->db->where('ID',$id_pacient);

		$query=$this->db->get();

		return $query->result();

	}



}