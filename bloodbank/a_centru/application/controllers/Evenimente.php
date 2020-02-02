<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evenimente extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('eveniment_m');
		$this->load->model('email_m');
	}
	public function index()
	{
		$data = array(
			'evenimente' => $this->eveniment_m->get_cereri_evenimente(), //preia din baza de date toate informatiile despre cereri evenimente
			'unread_msg'=>$this->email_m->get_unread_msg(),

		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('cereri/cereri_eveniment',$data);// incarca view-ul de cereri
		$this->load->view('layout/footer');
	}
	public function creare_eveniment()
	{
		$data = array(
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('events/creare_eveniment');// incarca view-ul cu cererea unui eveniment
		$this->load->view('layout/footer');
	}

  	public function vizualizare_evenimente()
	{
  		$data = array(
			'evenimente' => $this->eveniment_m->get_evenimente_active(), // ia din baza de date toate informatiile despre evenimentele active
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('events/evenimente',$data);// incarca pagina de evenimente active cu informatiile luate din baza de date
		$this->load->view('layout/footer');
  	}
  	public function evenimente_in_asteptare(){
  		$data = array(// ia datele despre evenimentele in asteptare din baza de date
			'evenimente' => $this->eveniment_m->get_evenimente_in_asteptare(),
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('events/evenimente_in_asteptare',$data);// incarca pagina de evenimente in asteptare
		$this->load->view('layout/footer');
  	}
  	public function editare_eveniment(){
  		$id=$this->uri->segment(3);// se primeste prin url id-ul unui eveniment
		$data = array(
			'evenimente' =>$this->eveniment_m->get_info_eveniment($id), //se ia informatiile despre evenimentul cu id ul specificat
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('events/editare_eveniment',$data);// deschide pagina de editare a evenimentului
		$this->load->view('layout/footer');
  	}

}
