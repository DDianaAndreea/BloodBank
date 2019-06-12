<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evenimente extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('eveniment_m');
		$this->load->model('email_m');


	}

	public function index()
	{
		$data = array(
			'evenimente' => $this->eveniment_m->get_cereri_evenimente(), 
			'unread_msg'=>$this->email_m->get_unread_msg(),

		);

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('cereri/cereri_eveniment',$data);
		$this->load->view('layout/footer');
	}

	public function creare_eveniment()
	{
		$data = array(
			'unread_msg'=>$this->email_m->get_unread_msg(),

		);

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('events/creare_eveniment');
		$this->load->view('layout/footer');
	}

	public function add_eveniment(){
		
		$postData = $this->input->post();
		$this->eveniment_m->adauga_evenimente($postData);
		redirect('evenimente/creare_eveniment','refresh');

  	}

  	public function vizualizare_evenimente(){
  		$data = array(
			'evenimente' => $this->eveniment_m->get_evenimente_active(), 
			'unread_msg'=>$this->email_m->get_unread_msg(),

		);

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('events/evenimente',$data);
		$this->load->view('layout/footer');
  	}

  	public function evenimente_in_asteptare(){
  		$data = array(
			'evenimente' => $this->eveniment_m->get_evenimente_in_asteptare(), 
			'unread_msg'=>$this->email_m->get_unread_msg(),

		);

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('events/evenimente_in_asteptare',$data);
		$this->load->view('layout/footer');
  	}

  	public function editare_eveniment(){
  		$id=$this->uri->segment(3);

		$data = array(
			'evenimente' =>$this->eveniment_m->get_info_eveniment($id),
			'unread_msg'=>$this->email_m->get_unread_msg(),

		);

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('events/editare_eveniment',$data);
		$this->load->view('layout/footer');
  	}

  	public function edit_eveniment(){
  		$id=$this->uri->segment(3);
  		$postData = $this->input->post();
		$this->eveniment_m->edit_eveniment($postData,$id);
		redirect('evenimente/evenimente_in_asteptare','refresh');
  	}

  	public function delete(){
  		$id=$this->uri->segment(3);
  		$this->eveniment_m->delete($id);
  		redirect('evenimente/evenimente_in_asteptare','refresh');
  	}

  	public function delete_ev(){
  		$id=$this->uri->segment(3);
  		$this->eveniment_m->delete($id);
  		redirect('evenimente/vizualizare_evenimente','refresh');
  	}

  	public function activ(){
  		$id=$this->uri->segment(3);
  		$this->eveniment_m->activ($id);
  		redirect('evenimente/evenimente_in_asteptare','refresh');
  	}

  	public function delete_propunere(){
  		$id=$this->uri->segment(3);
  		$this->eveniment_m->delete_propunere($id);
  		redirect('evenimente/index','refresh');
  	}

}