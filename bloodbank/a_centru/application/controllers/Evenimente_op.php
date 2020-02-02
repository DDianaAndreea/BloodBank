<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evenimente_op extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('eveniment_m');
		$this->load->model('email_m');
	}
	public function add_eveniment()
	{
		$postData = $this->input->post();//retine inputurile de la utilizator
		$this->eveniment_m->adauga_evenimente($postData);//creaza un eveniment cu inputurile primite
		redirect('evenimente/creare_eveniment','refresh');// reincarca pagina de creare evenimente
	}
	public function edit_eveniment()
	{
		$id=$this->uri->segment(3);// primeste prin url id ul evenimentului
		$postData = $this->input->post();// retine datele primite
		$this->eveniment_m->edit_eveniment($postData,$id);// modifica evenimentul cu id ul specificat cu datele primite
		redirect('evenimente/evenimente_in_asteptare','refresh');// reincarca pagina de evenimente in asteptare
	}
	public function delete()
	{
		$id=$this->uri->segment(3);// primeste prin url id ul evenimetului
		$this->eveniment_m->delete($id);// sterge evenimentul cu id ul specificat
		redirect('evenimente/evenimente_in_asteptare','refresh');//reincarca pagina de evenimente
	}
	public function delete_ev()
	{
		$id=$this->uri->segment(3);// primeste prin url id ul evenimetului
		$this->eveniment_m->delete($id);// sterge evenimentul cu id ul specifica
		redirect('evenimente/vizualizare_evenimente','refresh');//reincarca pagina de evenimente
	}
	public function activ()
	{
		$id=$this->uri->segment(3);// primeste prin url id ul evenimetului
		$this->eveniment_m->activ($id);// schimba starea evenimentului cu id ul specificat
		redirect('evenimente/evenimente_in_asteptare','refresh');//reincarca pagina de evenimente
	}
	public function delete_propunere()
	{
		$id=$this->uri->segment(3);// primeste prin url id ul evenimetului
		$this->eveniment_m->delete_propunere($id);// sterge cererea cu id ul specificat
		redirect('evenimente/index','refresh');// redirectioneaza pe pagina de evenimente
	}
}
