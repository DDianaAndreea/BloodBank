<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pacienti_op extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pacienti_m');
		$this->load->model('email_m');
	}
	public function make_active()
	{	//se primeste prin ulr id-ul pacientului
		$id = $this->uri->segment(3);
		$email = $this->pacienti_m->get_email_pacient($id);// se retine emailul pacientului

		$this->pacienti_m->send_email_ok($email);// se trimite emailul
		$this->pacienti_m->make_active($id);// se schimba starea pacientului cu id-ul specificat

		redirect('pacienti/cereri_pacienti','refresh');// se redirectioneaza pe pagica cu cererile pacientilor
	}
	public function delete()
	{	//se primeste prin url id ul pacientului
		$id=$this->uri->segment(3);
		$email = $this->pacienti_m->get_email_pacient($id);// se retine email pacientului cu id ul specificat

		$this->pacienti_m->send_email_nok($email);//se trimite email pacientului
		$this->pacienti_m->delete($id); // se sterge cererea

		redirect('pacienti/cereri_pacienti','refresh'); // se redirectioneaza pe pagina cu cereri
	}
	public function delete_pacient()
	{	// se primeste prin url id ul pacientului
		$id=$this->uri->segment(3);
		$this->pacienti_m->delete($id); // se sterge pacientul cu id-ul specificat
		redirect('pacienti/index','refresh');// se redirectioneaza pe pagina principala cu pacienti activi
	}
}
