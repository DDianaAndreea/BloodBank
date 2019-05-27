<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_m extends CI_Model {

	public function get_stoc(){
		$this->db->select('*');
		$this->db->from('stoc');

		$query=$this->db->get();

		return $query->result();
	}

	public function get_nr_ad(){

		$this->db->select('*');
		$this->db->from('donatori');
		$this->db->where('activ', '2');
		
		$query = $this->db->get();
		$result = $query->result();
		
		return count( $result );

	}

	public function get_nr_id(){
		$this->db->select('*');
		$this->db->from('donatori');
		$this->db->where('activ', '0');
		
		$query = $this->db->get();
		$result = $query->result();
		
		return count( $result );

	}

	public function get_nr_rd(){
		$this->db->select('*');
		$this->db->from('donatori');
		$this->db->where('activ', '3');
		
		$query = $this->db->get();
		$result = $query->result();
		
		return count( $result );

	}

	public function get_nr_0(){
		$this->db->select_sum('cantitate');
		$this->db->from('stoc');
		$this->db->where('grupa', '0');

		$query = $this->db->get();
		$result = $query->result(); 
		
		return $query->result();
	}

	public function get_nr_A(){
		$this->db->select_sum('cantitate');
		$this->db->from('stoc');
		$this->db->where('grupa', 'A');

		$query = $this->db->get();
		$result = $query->result(); 
		
		return $query->result();
	}

	public function get_nr_B(){
		$this->db->select_sum('cantitate');
		$this->db->from('stoc');
		$this->db->where('grupa', 'B');

		$query = $this->db->get();
		$result = $query->result(); 
		
		return $query->result();
	}

	public function get_nr_AB(){
		$this->db->select_sum('cantitate');
		$this->db->from('stoc');
		$this->db->where('grupa', 'AB');

		$query = $this->db->get();
		$result = $query->result(); 
		
		return $query->result();
	}

	public function get_nr_p(){
		$this->db->select('*');
		$this->db->from('pacienti');
		$this->db->where('activ', '0');
		
		$query = $this->db->get();
		$result = $query->result();
		
		return count( $result );
	}

	public function get_nr_d(){
		$this->db->select('*');
		$this->db->from('donatori');
		$this->db->where('activ', '1');
		
		$query = $this->db->get();
		$result = $query->result();
		
		return count( $result );
	}

	public function get_nr_s(){
		$this->db->select('*');
		$this->db->from('spitale');
		$this->db->where('activ', '0');
		
		$query = $this->db->get();
		$result = $query->result();
		
		return count( $result );
	}

	public function get_nr_e(){
		$this->db->select('*');
		$this->db->from('campanii');
		$this->db->where('in_asteptare', '0');
		
		$query = $this->db->get();
		$result = $query->result();
		
		return count( $result );
	}


}
