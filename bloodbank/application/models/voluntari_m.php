<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class voluntari_m extends CI_Model {

 	 	function cerere_voluntar($postData)
	{
		$data= array(
 			'prenume' => $postData['prenume'],
 			'nume' => $postData['nume'],
 			'email' => $postData['email'],
 			'telefon' => $postData['telefon'],
 			'tip' => $postData['tip'],
 			'mesaj' => $postData['mesaj']
 		);
 			$this->db->insert('voluntari',$data);
	}

 }

