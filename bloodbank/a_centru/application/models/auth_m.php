
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth_m extends CI_Model {

	
	function verify_login($postData)
	{
		$this->db->select('*');
		$this->db->where('email', $postData['email']);
		$this->db->where('parola', $postData['parola']);

		$query = $this->db->get('personal');

		return $query->result();
	}


}
