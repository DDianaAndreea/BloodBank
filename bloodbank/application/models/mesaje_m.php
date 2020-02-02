<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class mesaje_m extends CI_Model {

	function mesaje($postData)
	{
		$data= array(
 			'prenume' => $postData['prenume'],
 			'nume' => $postData['nume'],
 			'email' => $postData['email'],
 			'mesaj' => $postData['mesaj'],

 		);
 			$this->db->insert('mesaje',$data);
	}

 }
