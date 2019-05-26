<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cerere_Primire extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('cerere_primire_m','cpm');
		
	}

	
	public function index()
	{	
		$this->load->view('layout/header');
		$this->load->view('cerere_p');
		$this->load->view('layout/footer');
	}

	public function index_spital()
	{
		$this->load->view('layout/header');
		$this->load->view('cerere_s');
		$this->load->view('layout/footer');
	}



	public function cerere_pacient()
	{
		$postData = $this->input->post();
		$this->cpm->cerere_pacient($postData);
		redirect('index','refresh');	
	}

	public function cerere_spital()
	{
		$postData = $this->input->post();
		$this->cpm->cerere_spital($postData);
		redirect('index','refresh');	
	}



	

	

	
}
