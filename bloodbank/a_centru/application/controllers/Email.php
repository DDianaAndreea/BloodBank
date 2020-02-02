<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('email_m');
		$this->load->library('email');
	}
	public function index()
	{	//functia incarca pagina principala de emailuri de inbox
		$data = array(// array cu toate datele din mesaj
			'mesaje'=> $this->email_m->get_mesaje(),
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('email/inbox',$data);
		$this->load->view('layout/footer');
	}
	public function compose()
	{	//incarca pagina de compunere mesaj nou
		$data = array(
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('email/compose');
		$this->load->view('layout/footer');
	}
	public function compose_v()
	{	//incarca pagina de compunere pt voluntar
		$data = array(
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('email/compose_v');
		$this->load->view('layout/footer');
	}
	public function compose_d()
	{	//incarca pagina de compunere pentru donator
		$data = array(
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('email/compose_d');
		$this->load->view('layout/footer');
	}
	public function response()
	{	//incarca pagina de response la un email primit, incarcand automat si adresa celui pentru care se face raspunsul
		$id=$this->uri->segment(3);// primeste prin url id-ul celui pentru care se face raspunsul
		$data = array(
			'mesaj'=> $this->email_m->get_mesaj($id),
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('email/response',$data);
		$this->load->view('layout/footer');
	}
	public function view()
	{	//incarca pagina de read a unui email cu id-ul specificat
		$id=$this->uri->segment(3); // se primeste id-ul prin url
		$data = array(
			'mesaj'=> $this->email_m->get_mesaj($id),
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		//echo "<pre>".print_r($data,true)."</pre>";
		$this->email_m->read_msg($id);// se schimba starea emailului in citit
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('email/view-email',$data); //si se incarca view-ul de citire
		$this->load->view('layout/footer');
	}

}

