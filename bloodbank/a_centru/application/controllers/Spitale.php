<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spitale extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('spitale_m');

	}

	public function index()
	{
		$data = array(
			'spitale' => $this->spitale_m->get_spitale_active(), 
		);

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('table/hospitals-table',$data);
		$this->load->view('layout/footer');
	}

	
	public function cereri_spitale(){

		$data = array(
			'spitale'=> $this->spitale_m->get_cereri_spitale(),
		);

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('cereri/cereri_spitale',$data);
		$this->load->view('layout/footer');
	}

		public function make_active()
	{
		$id = $this->uri->segment(3);

		$this->spitale_m->make_active($id);
		

		redirect('spitale/cereri_spitale','refresh');
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->spitale_m->delete($id);

		redirect('spitale/cereri_spitale','refresh');
	}

	public function delete_spital(){
		$id=$this->uri->segment(3);
		$this->spitale_m->delete($id);

		redirect('spitale/index','refresh');
	}


}