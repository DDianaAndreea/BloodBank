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

	function send_email($postData)
	{

    	$this->load->library('email');

    	//SMTP & mail configuration
    	$config = array(
      	'protocol'  => 'smtp',
      	'smtp_host' => 'ssl://smtp.googlemail.com',
      	'smtp_port' => 465,
      	'smtp_user' => 'centrulBloodBank@gmail.com',
      	'smtp_pass' => 'bloodbank2019',
      	'mailtype'  => 'html',
      	'charset'   => 'utf-8'
    	);
    	
    	$this->email->initialize($config);
    	$this->email->set_mailtype("html");
    	$this->email->set_newline("\r\n");

    	//Email content
    	$htmlContent = '<h3>Dragă '.$postData['prenume'].' '.$postData['nume'].',</h3>';
    	$htmlContent .= '<p>Îți mulțumim pentru încrederea acordată și dorința ta de a colabora cu centrul nostru.</p>';
    	$htmlContent .= '<p>Te așteptăm la centul Blood Bank pentru a vă putea înregistra ca un potențial donator și pentru testele și analizele sanguine necesare.</p>';
    	$htmlContent .= '<p>Cu drag,</p>';
    	$htmlContent .= '<p>Echipa Blood Bank.</p>';


    	$this->email->to($postData['email']);
    	$this->email->from('centrulBloodBank@gmail.com','Blood Bank');
    	$this->email->subject('Înregistrare cerere de donare');
    	$this->email->message($htmlContent);

    	//Send email
    	$this->email->send();
	}

 }
 