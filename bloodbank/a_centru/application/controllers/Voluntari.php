<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voluntari extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('voluntari_m');

	}

	public function index()
	{
		$data = array(
			'voluntari' => $this->voluntari_m->get_voluntari(), 
		);

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('table/volunteers-table',$data);
		$this->load->view('layout/footer');
	}

	public function delete_voluntar(){
		$id=$this->uri->segment(3);
		$this->voluntari_m->delete_voluntar($id);

		redirect('voluntari/index','refresh');
	}

}