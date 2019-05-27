<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stocuri_m extends CI_Model {

	public function get_cantitate($grupa, $rh){
		$this->db->select('*');
		$this->db->where('grupa', $grupa);
		$this->db->where('rh', $rh);

		$query = $this->db->get('stoc');
		return $query->result();
	}

	public function get_stoc(){
		$this->db->select('*');

		$query = $this->db->get('stoc');
		return $query->result();
	}

	public  function actualizare_stoc_donator($id, $cantitate){
	 	$data = [
            'cantitate' => $cantitate,
        ];
		$this->db->where('ID',$id);
		$this->db->update('stoc',$data);

	}

	public function get_nr_0(){
		$this->db->select('cantitate');
		$this->db->where('grupa', '0');

		$query = $this->db->get('stoc');
		return $query->result();
	}

	public function get_nr_A(){
		$this->db->select('cantitate');
		$this->db->where('grupa', 'A');

		$query = $this->db->get('stoc');
		return $query->result();
	}

	public function get_nr_B(){
		$this->db->select('cantitate');
		$this->db->where('grupa', 'B');

		$query = $this->db->get('stoc');
		return $query->result();
	}

	public function get_nr_AB(){
		$this->db->select('cantitate');
		$this->db->where('grupa', 'AB');

		$query = $this->db->get('stoc');
		return $query->result();
	}

	public  function actualizare_stoc($grupa,$rh, $cantitate){
	 	$data = [
            'cantitate' => $cantitate,
        ];
		$this->db->where('grupa',$grupa);
		$this->db->where('rh',$rh);
		$this->db->update('stoc',$data);

	}

	public function actualizare_stoc_spital($id, $cantitate){
		$data = [
            'cantitate' => $cantitate,
        ];
		$this->db->where('ID',$id);
		$this->db->update('stoc',$data);
	}

}
