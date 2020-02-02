<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cerere_Donare extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('cerere_donare_m','cdm'); //incarca modelul
	}
	public function index()
	{
		// se incraca pagina principala de donare cu header-ul si footer-ul
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
	{	// incarca pagina de chestionar a donatorului
		$this->load->view('layout/header');
		$this->load->view('chestionar_d');
		$this->load->view('layout/footer');
	}
	public function cerere_donator()
	{
		$postData = $this->input->post(); // variabila $postData preia inputul de la donator
		$this->cdm->cerere_donator($postData); // trimite inputul in functia cerere_donator din  model
		$this->cdm->send_email($postData); //trimite inputul in functia send_email pentru a putea trimite email automat

		redirect('index','refresh');	// redirectioneaza utilizatorul catre pagina de home
	}
}
