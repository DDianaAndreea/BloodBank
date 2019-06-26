<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class eveniment_m extends CI_Model {

	function get_cereri_evenimente(){
		$this->db->select('*');
		$this->db->from('voluntari');
		$this->db->where('tip','initiator');

		$query=$this->db->get();

		return $query->result();
	}

	function adauga_evenimente($postData){
		$data= array(
 			'denumire' => $postData['denumire'],
 			'descriere' => $postData['descriere'],
 			'data' => $postData['data'],
 			'imagine' => $postData['imagine'],
 			'locatie' => $postData['locatie']
 		);
 			$this->db->insert('campanii',$data);
	}

	function get_evenimente_active(){
		$this->db->select('*');
		$this->db->from('campanii');
		$this->db->where('in_asteptare','1');
		$this->db->order_by('data','asc');


		$query=$this->db->get();

		return $query->result();
	}

	function get_evenimente_in_asteptare(){
		$this->db->select('*');
		$this->db->from('campanii');
		$this->db->where('in_asteptare','0');

		$query=$this->db->get();

		return $query->result();
	}

	function get_info_eveniment($id){
		$this->db->select('*');
		$this->db->from('campanii');
		$this->db->where('ID',$id);

		$query=$this->db->get();

		return $query->result();
	}

	function edit_eveniment($postData,$id){
		$data= array(
 			'denumire' => $postData['denumire'],
 			'locatie' => $postData['locatie'],
 			'data' => $postData['data'],
 			'descriere' => $postData['descriere'],
 			'imagine' => $postData['imagine']
 		);
 			$this->db->where('ID',$id);
 			$this->db->update('campanii',$data);
 			
	}

	function delete($id){
		$this->db->where('ID',$id);
		$this->db->delete('campanii');
	}

	function activ($id){
		$this->db->select('in_asteptare');
		$this->db->from('campanii');
		$this->db->set('in_asteptare','1');
		$this->db->where('ID',$id);
		$this->db->update('campanii');
	}

	function delete_propunere($id){
		$this->db->where('ID',$id);
		$this->db->delete('voluntari');
	}


}