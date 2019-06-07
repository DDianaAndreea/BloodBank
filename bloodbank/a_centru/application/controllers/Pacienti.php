<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pacienti extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pacienti_m');

	}

	public function index()
	{
		$data = array(
			'pacienti' => $this->pacienti_m->get_pacienti_activi(), 
		);
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('table/patient-table',$data);
		$this->load->view('layout/footer');
	}

	public function cereri_pacienti()
	{
		$data = array(
			
			'pacienti'=> $this->pacienti_m->get_cereri_pacienti(),
		);

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('cereri/cereri_pacienti',$data);
		$this->load->view('layout/footer');
	}

	public function make_active()
	{
		$id = $this->uri->segment(3);

		$this->pacienti_m->make_active($id);
		

		redirect('pacienti/cereri_pacienti','refresh');
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->pacienti_m->delete($id);

		redirect('pacienti/cereri_pacienti','refresh');

	}

	public function view_pacient(){
		$id=$this->uri->segment(3);

		$data = array(
			'pacienti' =>$this->pacienti_m->get_info_pacient($id)
		);
		

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('pacient',$data);
		$this->load->view('layout/footer');
	}

	public function delete_pacient(){
		$id=$this->uri->segment(3);
		$this->pacienti_m->delete($id);

		redirect('pacienti/index','refresh');
	}





}