<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cazuri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('cazuri_m');
		
	}

	
	public function index()
	{	
		$data = array(
			'cazuri' =>$this->cazuri_m->get_cazuri()
		);

		$this->load->view('layout/header');
		$this->load->view('cazuri',$data);
		$this->load->view('layout/footer');
	}
	

	

	

	
}