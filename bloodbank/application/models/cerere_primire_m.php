<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class cerere_primire_m extends CI_Model {


 	function cerere_pacient($postData)
	{
		$data= array(
 			'prenume' => $postData['prenume'],
 			'nume' => $postData['nume'],
 			'email' => $postData['email'],
 			'data_nastere' => $postData['data_nastere'],
 			'telefon' => $postData['telefon'],
 			'sex' => $postData['sex'],
 			'rh' => $postData['rh'],
 			'grupa_sanguina' => $postData['grupa_sanguina'],
 			'caz' => $postData['caz'],
 			'public' => $postData['public']
 		);
 			$this->db->insert('pacienti',$data);
	}


 	function cerere_spital($postData)
	{
		$data= array(
 			'denumire' => $postData['denumire'],
 			'telefon' => $postData['telefon'],
 			'email' => $postData['email'],
 			'cantitate' => $postData['cantitate'],
 			'rh' => $postData['rh'],
 			'grupa' => $postData['grupa'],
 			'cazul' => $postData['cazul']
 		);
 			$this->db->insert('spitale',$data);
	}


 }