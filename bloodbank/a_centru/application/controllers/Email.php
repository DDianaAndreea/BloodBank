<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('email_m');

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

}

