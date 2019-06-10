<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('email_m');
		$this->load->library('email'); 


	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('email/inbox');
		$this->load->view('layout/footer');
	}

		public function compose()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('email/compose');
		$this->load->view('layout/footer');
	}

		public function send()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('email/send-email');
		$this->load->view('layout/footer');
	}

		public function view()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('email/view-email');
		$this->load->view('layout/footer');
	}

	public function sendEmail()
  {
    //Load email library
    $this->load->library('email');

    //SMTP & mail configuration
    $config = array(
      'protocol'  => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'dyusk.96@gmail.com',
      'smtp_pass' => 'JeffDia23',
      'mailtype'  => 'html',
      'charset'   => 'utf-8'
    );
    $this->email->initialize($config);
    $this->email->set_mailtype("html");
    $this->email->set_newline("\r\n");

    //Email content
    $htmlContent = '<h1>Te iubesc</h1>';
    $htmlContent .= '<p>Scuze daca am tipat la tine...stii ca te iubi... <3 :* :* :*</p>';

    $this->email->to('dyusk_96@yahoo.com');
    $this->email->from('dyusk.96@gmail.com','your love');
    $this->email->subject('sorry');
    $this->email->message($htmlContent);

    //Send email
    $this->email->send();

  }







}

