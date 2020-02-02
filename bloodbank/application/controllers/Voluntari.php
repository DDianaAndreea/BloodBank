<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voluntari extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('voluntari_m','vm'); //incarca modelul
		
	}
	public function index()
	{	//functia care incarca pagina de cerere
		$this->load->view('layout/header'); //incarca header-ul
		$this->load->view('voluntari'); // incarca pagina de cerere voluntar
		$this->load->view('layout/footer'); //incarca footer-ul
	}
	public function cerere_voluntar()
	{	//functia care inregistreaza cererile voluntarilor
		$postData = $this->input->post(); // in variabila postData se retine inputul de la utilizator
		$this->vm->cerere_voluntar($postData); //se trimit datele de cerere in baza de date prin functia ceere_voluntar din model
		$this->vm->send_email($postData);// se trimite mesaj voluntarului cu ajutorul functiei send_email din model

		redirect('index','refresh');	// se redirectioneaza utilizatorul pe pagina de home
	}
}
