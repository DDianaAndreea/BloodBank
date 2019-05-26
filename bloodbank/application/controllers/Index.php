<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('index_m','im');
		
	}

	
	public function index()
	{	
		$data = array(
			'evenimente' =>$this->im->get_evenimente(),
		);

		$this->load->view('layout/header');
		$this->load->view('index',$data);
		$this->load->view('layout/footer');
	}

	public function dece()
	{	
		$this->load->view('layout/header');
		$this->load->view('dece');
		$this->load->view('layout/footer');
	}

	public function cum()
	{	
		$this->load->view('layout/header');
		$this->load->view('cum');
		$this->load->view('layout/footer');
	}
	public function unde()
	{	
		$this->load->view('layout/header');
		$this->load->view('unde');
		$this->load->view('layout/footer');
	}



	
	

	

	

	
}