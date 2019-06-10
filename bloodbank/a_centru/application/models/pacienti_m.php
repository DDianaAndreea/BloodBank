<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pacienti_m extends CI_Model {


	function get_cereri_pacienti(){
		$this->db->select('*');
		$this->db->from('pacienti');
		$this->db->where('activ','0');

		$query=$this->db->get();

		return $query->result();
	}

	function get_pacienti_activi(){
		$this->db->select('*');
		$this->db->from('pacienti');
		$this->db->where('activ','1');

		$query=$this->db->get();

		return $query->result();
	}
	function get_email_pacient($id_pacient){
		$this->db->select('email');
		$this->db->from('pacienti');
		$this->db->where('ID',$id_pacient);

		$query=$this->db->get();

		return $query->result();
	}

	public function make_active($id_pacient)
	{
		$this->db->select('activ');
		$this->db->from('pacienti');
		$this->db->where('ID',$id_pacient);
		$this->db->set('activ','1');
		$this->db->update('pacienti');

	}

	public function send_email_ok($email)
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
    	$htmlContent = '<p>Cererea a fost acceptată.</p>';
    	$htmlContent .= '<p>Urmează să se efectueze demersurile pentru transmiterea cantității necesare pentru dumneavoastră.</p>';
    	$htmlContent .= '<p>Multă sănătate,</p>';
    	$htmlContent .= '<p>Echipa Blood Bank.</p>';


    	$this->email->to($email[0]->email);
    	$this->email->from('centrulBloodBank@gmail.com','Blood Bank');
    	$this->email->subject('Acceptarea cererii');
    	$this->email->message($htmlContent);

    	//Send email
    	$this->email->send();
	}

	public function delete($id_pacient)
	{
		$this->db->where('ID', $id_pacient);
		$this->db->delete('pacienti');
	}

	public function send_email_nok($email)
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
    	$htmlContent = '<p>Ne pare rău,</p>';
    	$htmlContent .= '<p>Însă cererea nu îndeplinește cerințele necesare înscrierii în programul nostru de pacienti.</p>';
    	$htmlContent .= '<p>Cu drag,</p>';
    	$htmlContent .= '<p>Echipa Blood Bank.</p>';


    	$this->email->to($email[0]->email);
    	$this->email->from('centrulBloodBank@gmail.com','Blood Bank');
    	$this->email->subject('Respingerea cererii');
    	$this->email->message($htmlContent);

    	//Send email
    	$this->email->send();
	}

	public function get_info_pacient($id_pacient){
		
		$this->db->select('*');
		$this->db->from('pacienti');
		$this->db->where('ID',$id_pacient);

		$query=$this->db->get();

		return $query->result();

	}



}