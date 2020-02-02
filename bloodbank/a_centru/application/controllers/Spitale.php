<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spitale extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('spitale_m');
		$this->load->model('stocuri_m');
		$this->load->model('email_m');
	}
	public function index()
	{	// incarca pagina cu cererile aprobate ale spitalelor
		$data = array(
			'spitale' => $this->spitale_m->get_spitale_active(), // primeste cererile active
			'stocuri'=>$this->stocuri_m->get_stoc(), // primeste stocurile sanguine
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		 //echo "stocuri: <pre>".print_r($data['stoc'],true)."</pre>";
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('table/hospitals-table',$data);//incarca pagina cu cererile aprobate ale spitalelor si datele din baza de date
		$this->load->view('layout/footer');
	}
	public function cereri_spitale()
	{	// incarca pagina cu toate cererile de la spitale
		$data = array(
			'spitale'=> $this->spitale_m->get_cereri_spitale(),// se ia datele din cererile spitalelor
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('cereri/cereri_spitale',$data);// se incarca paginca cu datele din baza de date
		$this->load->view('layout/footer');
	}

}
