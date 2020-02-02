<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pacienti extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pacienti_m');
		$this->load->model('email_m');
	}
	public function index()
	{	// incarca pagina de pacienti cu cereri activate
		$data = array(
			'pacienti' => $this->pacienti_m->get_pacienti_activi(), //preia din baza de date toate datele pacientilor cu cereri active
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('table/patient-table',$data);// incarca pagina cu datele din baza de date
		$this->load->view('layout/footer');
	}
	public function cereri_pacienti()
	{	// incarca pagina cu cereri ale pacientilor
		$data = array(
			'pacienti'=> $this->pacienti_m->get_cereri_pacienti(),// preia din baza de date toate datele din cereri
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('cereri/cereri_pacienti',$data);// incarca pagina cu datele obtinute
		$this->load->view('layout/footer');
	}

	public function view_pacient()
	{	// se primeste prin url id-ul pacientului
		$id=$this->uri->segment(3);
		$data = array(
			'pacienti' =>$this->pacienti_m->get_info_pacient($id),// se retine in variabila toate datele despre pacientul cu id ul specificat
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('pacient',$data);// se incarca pagina de vizualizare a unui pacient cu datele rezultate din baza de date
		$this->load->view('layout/footer');
	}

}
