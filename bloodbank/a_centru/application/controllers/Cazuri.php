<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cazuri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('cazuri_m');

	}
	
	public function index(){
		$data = array(
			'cazuri' =>$this->cazuri_m->get_info_cazuri()
		);
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('table/cases-table',$data);
		$this->load->view('layout/footer');
	}

	public function view_caz(){
		$id=$this->uri->segment(3);

		$data = array(
			'pacienti' =>$this->cazuri_m->get_info_pacient($id)
		);

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('caz',$data);
		$this->load->view('layout/footer');
	}

	public function public_caz(){
		$postData = $this->input->post();
		$this->cazuri_m->public_caz($postData);
		redirect('pacienti','refresh');

	}

	public function delete(){
		$id=$this->uri->segment(3);

		$this->cazuri_m->delete($id);

		redirect('cazuri','refresh');
	}

}