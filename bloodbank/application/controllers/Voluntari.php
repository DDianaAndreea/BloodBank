<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voluntari extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('voluntari_m','vm');
		
	}

	
	public function index()
	{	
		$this->load->view('layout/header');
		$this->load->view('voluntari');
		$this->load->view('layout/footer');
	}
	
		public function cerere_voluntar()
	{
		$postData = $this->input->post();
		$this->vm->cerere_voluntar($postData);
		$this->vm->send_email($postData);

		redirect('index','refresh');	
	}
	

	

	
}