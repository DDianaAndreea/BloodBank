<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voluntari extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('voluntari_m');
		$this->load->model('email_m');
		

	}

	public function index()
	{
		$data = array(
			'voluntari' => $this->voluntari_m->get_voluntari(), 
			'unread_msg'=>$this->email_m->get_unread_msg(),

		);

		$this->load->view('layout/header',$data);
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