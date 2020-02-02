<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('index_m','im'); //incarca modelul
		
	}
	public function index()
	{	
		$data = array(
			'evenimente' =>$this->im->get_evenimente(), // retine in variabila data un array cu datele despre evenimente;
		);												// functia get_evenimente din model returneaza toate datele din baza de date despre evenimentele active;
		$this->load->view('layout/header'); //incarca header-ul;
		$this->load->view('index',$data); // incarca pagina de index cu datele din array;
		$this->load->view('layout/footer'); // incraca footer-ul;
	}
	public function dece()
	{
		$this->load->view('layout/header');//incarca header-ul;
		$this->load->view('dece'); //incarca pagina de informare "de ce?";
		$this->load->view('layout/footer');// incraca footer-ul;
	}
	public function cum()
	{
		$this->load->view('layout/header');//incarca header-ul;
		$this->load->view('cum'); //incarca pagina de informare"cum?";
		$this->load->view('layout/footer');// incraca footer-ul;
	}
	public function unde()
	{
		$this->load->view('layout/header');//incarca header-ul;
		$this->load->view('unde');//incarca pagina  de informare "unde?";
		$this->load->view('layout/footer');// incraca footer-ul;
	}
}
