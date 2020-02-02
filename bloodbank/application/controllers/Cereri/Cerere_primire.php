<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cerere_Primire extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cerere_primire_m','cpm');// se incarac modelul
	}

	public function index()
	{
		$this->load->view('layout/header');// se incarca header-ul
		$this->load->view('cerere_p');//se incarca pagina de cerere a pacientului
		$this->load->view('layout/footer'); //se incarca footer-ul
	}

	public function index_spital()
	{
		$this->load->view('layout/header'); // se incarca header-ul
		$this->load->view('cerere_s');//se incarca pagina de cerere a spitalului
		$this->load->view('layout/footer'); //se incarca footer-ul
	}

	public function cerere_pacient()
	{
		$postData = $this->input->post(); //variabila $postData retine inputul utilizatorului
		$this->cpm->cerere_pacient($postData); // trimite inputul in functia din model pentru inregistrarea in baza de date
		$this->cpm->send_email_p($postData); // trimite inputul pentru a putea trimite un email automat utilizatorului

		redirect('index','refresh');	// redirectioneaza pe pagina de home
	}

	public function cerere_spital()
	{
		$postData = $this->input->post(); //variabila $postData retine inputul spitalului
		$this->cpm->cerere_spital($postData); // trimite inputul in functia din model pentru inregistrarea in baza de date
		$this->cpm->send_email_s($postData); // trimite inputul pentru a putea trimite un email automat utilizatorului

		redirect('index','refresh');	// redirectioneaza pe pagina de home
	}
}
