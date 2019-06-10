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
    	$htmlContent .= '<p>Cerera a fost înregistrată .</p>';
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

