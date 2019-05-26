<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cazuri_m extends CI_Model {

	public function get_info_pacient($id_pacient){
		
		$this->db->select('*');
		$this->db->from('pacienti');
		$this->db->where('ID',$id_pacient);

		$query=$this->db->get();

		return $query->result();

	}
	
	public function public_caz($postData){
		$data= array(
 			'nume' => $postData['nume'],
 			'prenume' => $postData['prenume'],
 			'grupa_sanguina' => $postData['grupa_sanguina'],
 			'caz' => $postData['caz']
 		);
 			$this->db->insert('cazuri_publicate',$data);
	}

	public function get_info_cazuri(){
		$this->db->select('*');
		$this->db->from('cazuri_publicate');
		
		$query=$this->db->get();

		return $query->result();
	}
	
	public function delete($id){
		$this->db->where('ID', $id);
		$this->db->delete('cazuri_publicate');
	}

	}


