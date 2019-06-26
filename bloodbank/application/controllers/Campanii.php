<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campanii extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('campanii_m');
		$this->load->model('cookie_m');

		$this->load->helper('cookie');
		


		
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

	
	public function setCookie()
	{	
		$id= $this->uri->segment(3);
		$data= $this->cookie_m->get_date($id);

		//echo "Data: <pre>".print_r($data,true)."</pre>";
		
		$cookie = array(
			'name' => 'cookie'.$id, 
			'value' => $id,
			'domain' => '',
			'expire' => strtotime($data[0]->data) ,
		);
         
		 //echo "Cookie val: <pre>".print_r($cookie,true)."</pre>";

		$cookie_name= $cookie['name'];

		// echo "Cookie name: <pre>".print_r($cookie_name,true)."</pre>";

		$this->input->set_cookie($cookie);

		$participanti_res = $this->cookie_m->get_participanti($id);
		// echo "Date res: <pre>".print_r($participanti_res,true)."</pre>";


		foreach($participanti_res as $participanti){
			$this->cookie_m->participanti($participanti->ID, $participanti->participanti+1);
		}


		redirect('campanii','refresh');

	}


	
}