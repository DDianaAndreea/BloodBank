<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campanii extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//se incarca modelele care se folosesc
		$this->load->model('campanii_m');
		$this->load->model('cookie_m');

		// se incarca  libraria de cookie
		$this->load->helper('cookie');
	}
	public function index()
	{
		// se primeste prin intermediul variabilei data un array de campanii disponibile din modelul campanii_m
		$data = array(
			//se apeleaza functia din model pentru a lua toate datele din tabelul campaniilor din baza de date
			'campanii' =>$this->campanii_m->get_campanii()
		);
		$this->load->view('layout/header');//se incarca header-ul
		$this->load->view('campanii',$data);//se incarca pagina de index cu set-ul de array
		$this->load->view('layout/footer');// se incarca footer-ul
	}
	public function campanie()
	{
		$id=$this->uri->segment(3);//variabila id retine id-ul campaniei selectate de utilizator
		//in variabila data se retine array ul de date despre campania cu id ul specificat
		$data = array(
			//se apeleaza functia din model pentru a lua datele din baza de date
			'campanii' =>$this->campanii_m->get_campanie($id)
		);
		$this->load->view('layout/header2');//se incarca header-ul
		$this->load->view('campanii',$data);//se incraca pagina de campanie cu datele primite de la model
		$this->load->view('layout/footer');//se incarca footer-ul
	}
}
