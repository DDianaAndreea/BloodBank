<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('email_m');
		$this->load->library('email'); 


	}

	public function index()
	{
		$data = array(
			
			'mesaje'=> $this->email_m->get_mesaje(),
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);

		

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('email/inbox',$data);
		$this->load->view('layout/footer');
	}

	public function compose()
	{
		$data = array(
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('email/compose');
		$this->load->view('layout/footer');
	}

	public function compose_v()
	{
		$data = array(
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('email/compose_v');
		$this->load->view('layout/footer');
	}

	public function compose_d()
	{
		$data = array(
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('email/compose_d');
		$this->load->view('layout/footer');
	}

	public function response()
	{
		$id=$this->uri->segment(3);
		$data = array(
			
			'mesaj'=> $this->email_m->get_mesaj($id),
			'unread_msg'=>$this->email_m->get_unread_msg(),

		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('email/response',$data);
		$this->load->view('layout/footer');
	}


	public function view()
	{
		$id=$this->uri->segment(3);

		$data = array(
			
			'mesaj'=> $this->email_m->get_mesaj($id),
			'unread_msg'=>$this->email_m->get_unread_msg(),

		);
		//echo "<pre>".print_r($data,true)."</pre>";

		$this->email_m->read_msg($id);

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('email/view-email',$data);
		$this->load->view('layout/footer');
	}

	public function sendEmail()
 	{
    	$postData = $this->input->post();

	//echo "<pre>".print_r($postData,true)."</pre>";

    	$email=$postData['email'];
    	$subiect=$postData['subiect'];
    	$mesaj=$postData['mesaj'];
	
	//echo "<pre>".print_r($mesaj,true)."</pre>";

    	$this->email_m->sendEmail($email,$subiect,$mesaj);

		redirect('email/index','refresh');
	}

	public function sendEmail_v()
 	{
    	$postData = $this->input->post();

    	$subiect=$postData['subiect'];
    	$mesaj=$postData['mesaj'];

    	$emails=$this->email_m->get_email_voluntari();
	
		// echo "<pre>".print_r($emails,true)."</pre>";
		// echo "<pre>".print_r($subiect,true)."</pre>";
		// echo "<pre>".print_r($mesaj,true)."</pre>";
		foreach ($emails as $email) {
    		$this->email_m->sendEmail($email->email,$subiect,$mesaj);
		}

		redirect('email/index','refresh');
	}

		public function sendEmail_d()
 	{
     	$postData = $this->input->post();

     	$subiect=$postData['subiect'];
     	$mesaj=$postData['mesaj'];
     	$grupa=$postData['grupa'];
     	$rh=$postData['rh'];

		// echo "<pre>".print_r($subiect,true)."</pre>";
		// echo "<pre>".print_r($mesaj,true)."</pre>";
		// echo "<pre>".print_r($grupa,true)."</pre>";
		// echo "<pre>".print_r($rh,true)."</pre>";

		if ($grupa!='' && $rh!='') {
			$emails=$this->email_m->get_email_donatori_activi_($grupa,$rh);
			foreach ($emails as $email) {
     			$this->email_m->sendEmail($email->email,$subiect,$mesaj);
			}
     		
			
		}else{
			$emails=$this->email_m->get_email_donatori_activi();
			foreach ($emails as $email) {
     			$this->email_m->sendEmail($email->email,$subiect,$mesaj);
			 }
		}
		//echo "<pre>".print_r($emails,true)."</pre>";

		redirect('email/index','refresh');
	}

	public function delete_msg()
	{
		$id=$this->uri->segment(3);
		$this->email_m->delete_msg($id);

		redirect('email/index','refresh');
	}

	







}

