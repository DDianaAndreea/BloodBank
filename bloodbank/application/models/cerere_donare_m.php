<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class cerere_donare_m extends CI_Model {

 	function cerere_donator($postData)
	{
		$data= array(
			'activ'=>'0',
 			'prenume' => $postData['prenume'],
 			'nume' => $postData['nume'],
 			'email' => $postData['email'],
 			'data_nastere' => $postData['data_nastere'],
 			'telefon' => $postData['telefon'],
 			'sex' => $postData['sex'],
 			'rh' => $postData['rh'],
 			'grupa_sanguina' => $postData['grupa_sanguina'],
 			'c1' => $postData['c1'],
 			'c2' => $postData['c2'],
 			'c3' => $postData['c3'],
 			'c4' => $postData['c4'],
 			'c5' => $postData['c5'],
 			'c6' => $postData['c6'],
 			'c7' => $postData['c7'],
 			'c8' => $postData['c8'],
 			'c9' => $postData['c9'],
 			'c10' => $postData['c10'],
 			'c11' => $postData['c11'],
 			'c12' => $postData['c12'],
 			'c13' => $postData['c13'],
 			'c14' => $postData['c14'],
 			'c15' => $postData['c15'],
 			'c16' => $postData['c16'],
 			'c17' => $postData['c17'],
 			'c18' => $postData['c18'],
 			'c19' => $postData['c19'],
 			'c20' => $postData['c20'],
 			'c21' => $postData['c21'],
 			'c22' => $postData['c22'],
 			'c23' => $postData['c23'],
 			'c24' => $postData['c24'],
 			'c25' => $postData['c25'],
 			'c26' => $postData['c26'],
 			'c27' => $postData['c27']
 			

 		);
 			$this->db->insert('donatori',$data);
	}

 }
 