<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voluntari extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('voluntari_m');
		$this->load->model('email_m');
	}
	public function index()
	{
		$data = array(
			'voluntari' => $this->voluntari_m->get_voluntari(), // se retin toti voluntarii din baza de date
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('table/volunteers-table',$data);// se incarca pagina de voluntari cu datele din baza de date
		$this->load->view('layout/footer');
	}
	public function delete_voluntar()
	{
		$id=$this->uri->segment(3);// se primeste prin url id ul voluntarului
		$this->voluntari_m->delete_voluntar($id);// se sterge voluntarul cu id ul specificat
		redirect('voluntari/index','refresh');// se reincarca pagina de voluntari
	}
}
