<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_m');
		$this->load->model('home_m');

		if(!$this->session->userdata('logged_in') || !$this->session->userdata('admin_logged_in')){
			redirect('login','refresh');
		}

	}

	public function index()
	{
		$data = array(
			
			'donatori_activi'=> $this->home_m->get_nr_ad(),
			'donatori_inactivi'=> $this->home_m->get_nr_id(),
			'donatori_respinsi'=> $this->home_m->get_nr_rd(),
			'grupa0'=> $this->home_m->get_nr_0(),
			'grupaA'=> $this->home_m->get_nr_A(),
			'grupaB'=> $this->home_m->get_nr_B(),
			'grupaAB'=> $this->home_m->get_nr_AB(),
		);

		echo "Donatori: <pre>".print_r($data,true)."</pre>";

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('index',$data);
		$this->load->view('layout/footer');
	}

}

