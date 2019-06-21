<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cerere_Donare extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('cerere_donare_m','cdm');
		
	}

	
	public function index()
	{	
		$this->load->view('layout/header');
		$this->load->view('cerere_donare');
		$this->load->view('layout/footer');
	}

	// public function cerere_d()
	// {	
	// 	$this->load->view('layout/header');
	// 	$this->load->view('cerere_d');
	// 	$this->load->view('layout/footer');
	// }

	public function chestionar_d()
	{	
		$this->load->view('layout/header');
		$this->load->view('chestionar_d');
		$this->load->view('layout/footer');
	}

	public function cerere_donator()
	{
		$postData = $this->input->post();
		$this->cdm->cerere_donator($postData);
		$this->cdm->send_email($postData);
		redirect('index','refresh');	
	}

	

	

	
}
