<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesaje extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mesaje_m','mm');
		
	}

		public function contact()
	{	
		$this->load->view('layout/header');
		$this->load->view('contact');
		$this->load->view('layout/footer');
	}

		public function mesaje()
	{
		$postData = $this->input->post();
		$this->mm->mesaje($postData);
		redirect('index','refresh');	
	}
	

	

	
}