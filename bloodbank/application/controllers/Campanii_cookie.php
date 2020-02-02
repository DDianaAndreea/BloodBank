<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campanii_cookie extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//se incarca modelele care se folosesc
		$this->load->model('campanii_m');
		$this->load->model('cookie_m');

		// se incarca  libraria de cookie
		$this->load->helper('cookie');
	}
	public function setCookie()
	{
		$id= $this->uri->segment(3);// retine id-ul campaniei
		$data= $this->cookie_m->get_date($id); // retine datele despre campania cu id-ul respectiv

		$cookie = array( //se seteaza valorile cookie-ului
			'name' => 'cookie'.$id, //numele cookie ului
			'value' => $id, // valoarea este id ul evenimentului la care utilizatorul alege sa participe
			'domain' => '',
			'expire' => strtotime($data[0]->data) ,  //expira in momentul cand evenimentul este sters
		);

		$this->input->set_cookie($cookie);  // se seteaza cookie-ul

		$participanti_res = $this->cookie_m->get_participanti($id); // retine numarul de participanti ai campaniei cu id-ul respectiv

		foreach($participanti_res as $participanti){
			$this->cookie_m->participanti($participanti->ID, $participanti->participanti+1); //se actualizeaza numarul de participanti
		}
		redirect('campanii','refresh');		//se da refresh la pagina
	}
}
