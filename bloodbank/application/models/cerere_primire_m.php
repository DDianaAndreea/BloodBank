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

	function send_email_p($postData)
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
    	$htmlContent .= '<p>Cerera a fost înregistrată și urmează a fi verificată.</p>';
    	$htmlContent .= '<p>Cu drag,</p>';
    	$htmlContent .= '<p>Echipa Blood Bank.</p>';


    	$this->email->to($postData['email']);
    	$this->email->from('centrulBloodBank@gmail.com','Blood Bank');
    	$this->email->subject('Înregistrare cerere ');
    	$this->email->message($htmlContent);

    	//Send email
    	$this->email->send();
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


	function send_email_s($postData)
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
    	$htmlContent = '<h3>'.$postData['denumire'].',</h3>';
    	$htmlContent .= '<p>Cerera a fost înregistrată și urmează a fi verificată.</p>';
    	$htmlContent .= '<p>Cu drag,</p>';
    	$htmlContent .= '<p>Echipa Blood Bank.</p>';


    	$this->email->to($postData['email']);
    	$this->email->from('centrulBloodBank@gmail.com','Blood Bank');
    	$this->email->subject('Înregistrare cerere ');
    	$this->email->message($htmlContent);

    	//Send email
    	$this->email->send();
	}

 }