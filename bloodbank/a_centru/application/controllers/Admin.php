<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_m');
		$this->load->model('home_m');
		$this->load->model('eveniment_m');
		$this->load->model('donatori_m');
		$this->load->model('pacienti_m');



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
			'evenimente'=> $this->eveniment_m->get_evenimente_active(),
			'pacienti_in_asteptare'=> $this->home_m->get_nr_p(),
			'donatori_in_asteptare'=> $this->home_m->get_nr_d(),
			'spitale_in_asteptare'=> $this->home_m->get_nr_s(),
			'evenimente_in_asteptare'=> $this->home_m->get_nr_e(),
			'donatori_cu_grupa_0'=> $this->home_m->get_nr_d_0(),
			'donatori_cu_grupa_A'=> $this->home_m->get_nr_d_A(),
			'donatori_cu_grupa_B'=> $this->home_m->get_nr_d_B(),
			'donatori_cu_grupa_AB'=> $this->home_m->get_nr_d_AB(),

		);

		 //echo "data: <pre>".print_r($data['pacienti_in_asteptare'],true)."</pre>";

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('index',$data);
		$this->load->view('layout/footer');
	}

	public function d_skeyword()
	{
		$key=$this ->input->post('d_key');
		

		$data = array(
			
			'd_a'=> $this->donatori_m->get_donatori_activi(),
			'd_i'=> $this->donatori_m->get_donatori_in_astetare(),
			'd_r'=> $this->donatori_m->get_donatori_respinsi(),

			'donatori'=> $this->home_m->search_d($key),
			
		);
		
		//echo "data: <pre>".print_r($data,true)."</pre>";

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('donator',$data);
		$this->load->view('layout/footer');
	
	}

	public function p_skeyword()
	{
		$key=$this ->input->post('p_key');
		

		$data = array(
			
			//'pacienti' => $this->pacienti_m->get_pacienti_activi(), 
			'pacienti'=> $this->home_m->search_p($key),
			
		);
		
		//echo "data: <pre>".print_r($data,true)."</pre>";

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('table/patient-table',$data);
		$this->load->view('layout/footer');
	
	}

}

