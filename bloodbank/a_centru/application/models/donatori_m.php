<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class donatori_m extends CI_Model {

	function get_cereri_donatori(){
		$this->db->select('*');
		$this->db->from('donatori');
		$this->db->where('activ','0');

		$query=$this->db->get();

		return $query->result();
	}

	function get_donatori_activi(){
		$this->db->select('*');
		$this->db->from('donatori');
		$this->db->where('activ','2');
		$this->db->order_by('nume','asc');

		$query=$this->db->get();

		return $query->result();
	}

	function get_donatori_in_astetare(){
		$this->db->select('*');
		$this->db->from('donatori');
		$this->db->where('activ','1');
		$this->db->order_by('nume','asc');

		$query=$this->db->get();

		return $query->result();
	}
	function get_donatori_respinsi(){
		$this->db->select('*');
		$this->db->from('donatori');
		$this->db->where('activ','3');
		$this->db->order_by('nume','asc');

		$query=$this->db->get();

		return $query->result();
	}

	function get_info_donator($id_donator){
		$this->db->select('*');
		$this->db->from('donatori');
		$this->db->where('ID',$id_donator);

		$query=$this->db->get();

		return $query->result();
	}

	function delete($id_donator){
		$this->db->where('ID', $id_donator);
		$this->db->delete('donatori');
	}

	function in_asteptare($id_donator){
		$data = [
            'activ' => '1',
        ];
		$this->db->where('ID', $id_donator);
		$this->db->update('donatori',$data);
	}


	function activare($id_donator){
		$data = [
            'activ' => '2',
        ];
		$this->db->where('ID', $id_donator);
		$this->db->update('donatori',$data);
	}

	function donator_respins($id_donator){
		$data = [
            'activ' => '3',
        ];
		$this->db->where('ID', $id_donator);
		$this->db->update('donatori',$data);
	}

	function date_personale($id,$postData){
		$data= array(
			'id'=> $id,
 			'cnp' => $postData['cnp'],
 			'seria' => $postData['seria'],
 			'numarul' => $postData['numarul'],
 			'localitate' => $postData['localitate'],
 			'judet' => $postData['judet'],
 			'adresa' => $postData['adresa']
 		);
 			$this->db->insert('carnetul_donatorului',$data);
	}

	function get_info_carnet($id){
		$this->db->select('*');
		$this->db->from('carnetul_donatorului');
		$this->db->where('ID',$id);

		$query=$this->db->get();

		return $query->result();
	}

	function get_carnete_donatori(){
		$this->db->select('*');
		$this->db->from('carnetul_donatorului');

		$query=$this->db->get();

		return $query->result();
	}

	function donare_azi($id){
		$data = [
            'data_ultimei_donari'  => date('Y-m-d H:i:s'),
        ];
        $this->db->where('ID', $id);
		$this->db->update('carnetul_donatorului',$data);
	}

	}