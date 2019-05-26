<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stocuri_m extends CI_Model {

	function get_cantitate($grupa, $rh){
		$this->db->select('*');
		$this->db->where('grupa', $grupa);
		$this->db->where('rh', $rh);

		$query = $this->db->get('stoc');
		return $query->result();
	}

	 function actualizare_stoc_donator($id, $cantitate){
	 	$data = [
            'cantitate' => $cantitate,
        ];
		$this->db->where('ID',$id);
		$this->db->update('stoc',$data);

	}


}
