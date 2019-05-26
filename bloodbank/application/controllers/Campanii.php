<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campanii extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('campanii_m');
		
	}

	
	public function index()
	{	
		$data = array(
			'campanii' =>$this->campanii_m->get_campanii()
		);

		$this->load->view('layout/header');
		$this->load->view('campanii',$data);
		$this->load->view('layout/footer');
	}
	
	

	
}