<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cazuri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// incarca modelul
		$this->load->model('cazuri_m');
	}
	public function index(){
		// retine in array-ul $data datele despre cazurile publicate
		$data = array(
			// face apeleaza gunctia din model pentru a lua din baza de date toate datele din tabelul cazuri_publicate
			'cazuri' =>$this->cazuri_m->get_cazuri()
		);
		$this->load->view('layout/header');//incarca header-ul
		$this->load->view('cazuri',$data);// incarca pagina de cazuri cu array-ul dat
		$this->load->view('layout/footer');// incraca footer-ul
	}
}
