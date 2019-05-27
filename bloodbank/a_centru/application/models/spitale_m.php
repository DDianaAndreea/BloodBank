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

	public function get_cantitate($id_spital)
	{
		$this->db->select('cantitate');
		$this->db->from('spitale');
		$this->db->where('ID',$id_spital);

		$query=$this->db->get();

		return $query->result();

	}

	public function get_grupa($id_spital)
	{
		$this->db->select('grupa');
		$this->db->from('spitale');
		$this->db->where('ID',$id_spital);

		$query=$this->db->get();

		return $query->result();

	}

	public function get_rh($id_spital)
	{
		$this->db->select('rh');
		$this->db->from('spitale');
		$this->db->where('ID',$id_spital);

		$query=$this->db->get();

		return $query->result();

	}
	public function get_cantitate_stoc($grupa, $rh){
		$this->db->select('cantitate',);
		$this->db->from('stoc');
		$this->db->where('grupa',$grupa);
		$this->db->where('rh',$rh);

		$query=$this->db->get();

		return $query->result();
	}

	public function get_id_stoc($grupa, $rh){
		$this->db->select('id',);
		$this->db->from('stoc');
		$this->db->where('grupa',$grupa);
		$this->db->where('rh',$rh);

		$query=$this->db->get();

		return $query->result();
	}



	}