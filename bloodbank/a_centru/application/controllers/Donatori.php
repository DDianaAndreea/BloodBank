<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donatori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('donatori_m');
		$this->load->model('stocuri_m');
		$this->load->model('email_m');
		$this->load->library("pagination");
		$this->load->model('home_m');



	}

	public function index()
	{
		// $data = array(
			
		// 	'donatori'=> $this->donatori_m->get_donatori_activi(),
		// 	'd'=> $this->donatori_m->get_carnete_donatori(),
		// 	'unread_msg'=>$this->email_m->get_unread_msg(),

			
		// );

		// $this->load->view('layout/header',$data);
		// $this->load->view('layout/navbar');
		// $this->load->view('table/active-donors-table',$data);
		// $this->load->view('layout/footer');

		$config = array();
        $config["base_url"] = base_url() . "donatori";
        $config["total_rows"] = $this->home_m->get_nr_ad();
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['donatori'] = $this->donatori_m->get_donatori($config["per_page"], $page);
        $data['d'] = $this->donatori_m->get_carnete_donatori();
        $data['unread_msg'] = $this->email_m->get_unread_msg();

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
        $this->load->view('table/active-donors-table', $data);
		$this->load->view('layout/footer');

	}

	public function in_donors()
	{
		$data = array(
			
			'donatori'=> $this->donatori_m->get_donatori_in_astetare(),
			'unread_msg'=>$this->email_m->get_unread_msg(),

		);

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('table/inactive-donors-table',$data);
		$this->load->view('layout/footer');
	}

	public function resp_donors(){
		$data = array(
			
			'donatori'=> $this->donatori_m->get_donatori_respinsi(),
			'unread_msg'=>$this->email_m->get_unread_msg(),

		);

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('table/rejected-donors-table',$data);
		$this->load->view('layout/footer');
	}
	

	public function cereri_donatori()
	{
		$data = array(
			
			'donatori'=> $this->donatori_m->get_cereri_donatori(),
			'unread_msg'=>$this->email_m->get_unread_msg(),

		);

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('cereri/cereri_donatori',$data);
		$this->load->view('layout/footer');
	}

	public function chestionar(){
		$id=$this->uri->segment(3);

		$data = array(
			'donatori' =>$this->donatori_m->get_info_donator($id),
			'carnet' =>$this->donatori_m->get_info_carnet($id),
			'unread_msg'=>$this->email_m->get_unread_msg(),

		);
		

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('chestionar',$data);
		$this->load->view('layout/footer');
	}

	public function delete_donator()
	{
		$id=$this->uri->segment(3);
		
		$nume = $this->donatori_m->get_nume_donator($id); 
		$prenume = $this->donatori_m->get_prenume_donator($id); 
		$email = $this->donatori_m->get_email_donator($id); 

		 // echo "nume: <pre>".print_r($nume,true)."</pre>";
		 // echo "pre: <pre>".print_r($prenume,true)."</pre>";
		 // echo "e: <pre>".print_r($email,true)."</pre>";

		$this->donatori_m->send_email_delete($nume,$prenume,$email);

		$this->donatori_m->delete($id);


		redirect('donatori/cereri_donatori','refresh');

	}

	public function in_asteptare(){
		$id=$this->uri->segment(3);
		$nume = $this->donatori_m->get_nume_donator($id); 
		$prenume = $this->donatori_m->get_prenume_donator($id); 
		$email = $this->donatori_m->get_email_donator($id);

		$this->donatori_m->send_email_in_asteptare($nume,$prenume,$email);

		$this->donatori_m->in_asteptare($id);

		redirect('donatori/in_donors','refresh');
	}

	public function activare(){
		$id=$this->uri->segment(3);
		$nume = $this->donatori_m->get_nume_donator($id); 
		$prenume = $this->donatori_m->get_prenume_donator($id); 
		$email = $this->donatori_m->get_email_donator($id);

		$this->donatori_m->send_email_activare($nume,$prenume,$email);

		$this->donatori_m->activare($id);

		redirect('donatori/in_donors','refresh');
	}

	public function donator_respins(){
		$id=$this->uri->segment(3);
		$nume = $this->donatori_m->get_nume_donator($id); 
		$prenume = $this->donatori_m->get_prenume_donator($id); 
		$email = $this->donatori_m->get_email_donator($id);

		$this->donatori_m->send_email_respingere($nume,$prenume,$email);

		$this->donatori_m->donator_respins($id);


		redirect('donatori/in_donors','refresh');
	}

	public function date_personale(){
		$postData = $this->input->post();
		$id=$this->uri->segment(3);
		$this->donatori_m->date_personale($id,$postData);
		
		redirect('donatori/chestionar/'.$id,'refresh');
	}

	public function carnetul_donatorului(){
		$id=$this->uri->segment(3);

		$data = array(
			'donatori' =>$this->donatori_m->get_info_donator($id),
			'carnet' =>$this->donatori_m->get_info_carnet($id),
			'unread_msg'=>$this->email_m->get_unread_msg(),

		);
		

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('carnetul_donatorului',$data);
		$this->load->view('layout/footer');
	}

	public function donare_azi(){

		$id=$this->uri->segment(3);
		$grupa=$this->uri->segment(4);
		$rh=$this->uri->segment(5);
		$email=$this->donatori_m->get_email_donator($id);
		$nume=$this->donatori_m->get_nume_donator($id);
		$prenume=$this->donatori_m->get_prenume_donator($id);

		
		$this->donatori_m->send_email_donare($email,$nume,$prenume);

		$this->donatori_m->donare_azi($id);


		$cantitate_res = $this->stocuri_m->get_cantitate($grupa, $rh);

		//echo "Cantitate: <pre>".print_r($cantitate_res,true)."</pre>";
		foreach($cantitate_res as $cantitate){
			$this->stocuri_m->actualizare_stoc_donator($cantitate->ID, $cantitate->cantitate+1);
		}
		

		redirect('donatori/index','refresh');
	}

	public function donare_azi_home(){

		$id=$this->uri->segment(3);
		$grupa=$this->uri->segment(4);
		$rh=$this->uri->segment(5);

		$email=$this->donatori_m->get_email_donator($id);
		$nume=$this->donatori_m->get_nume_donator($id);
		$prenume=$this->donatori_m->get_prenume_donator($id);

		
		$this->donatori_m->send_email_donare($email,$nume,$prenume);
		
		$this->donatori_m->donare_azi($id);

		$cantitate_res = $this->stocuri_m->get_cantitate($grupa, $rh);

		//echo "Cantitate: <pre>".print_r($cantitate_res,true)."</pre>";
		foreach($cantitate_res as $cantitate){
			$this->stocuri_m->actualizare_stoc_donator($cantitate->ID, $cantitate->cantitate+1);
		}
		

		redirect('admin/index','refresh');
	}

	public function modifica_gr_rh(){
		$postData=$this->input->post();
		$id=$this->uri->segment(3);
		
		$this->donatori_m->modifica_gr_rh($id,$postData);

		// echo "postData: <pre>".print_r($postData,true)."</pre>";
		// echo "id: <pre>".print_r($id,true)."</pre>";

		redirect('donatori/in_donors','refresh');
	}

	public function send_email_r_d(){
		
		$id=$this->uri->segment(3);
		$data = array(
			
			'mesaj'=> $this->donatori_m->get_donator_respins($id),
			'unread_msg'=>$this->email_m->get_unread_msg(),

		);

		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('email/response',$data);
		$this->load->view('layout/footer');
	
	}

	public function skeyword()
	{
		$key=$this ->input->get('don_key');
		

		$data = array(
			
			//'donatori'=> $this->donatori_m->get_donatori_activi(),
			'd'=> $this->donatori_m->get_carnete_donatori(),
			'donatori'=> $this->donatori_m->search($key),
			'unread_msg'=>$this->email_m->get_unread_msg(),

			
		);

		//echo "data: <pre>".print_r($data,true)."</pre>";


		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('table/active-donors-table-s',$data);
		$this->load->view('layout/footer');
	
	}


	public function skeyword2()
	{
		$key=$this ->input->get('don_key');
		

		$data = array(
			
			//'donatori'=> $this->donatori_m->get_donatori_activi(),
			'd'=> $this->donatori_m->get_carnete_donatori(),
			'donatori'=> $this->donatori_m->search2($key),
			'unread_msg'=>$this->email_m->get_unread_msg(),

			
		);

		//echo "data: <pre>".print_r($data,true)."</pre>";


		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('table/inactive-donors-table',$data);
		$this->load->view('layout/footer');
	
	}


	public function skeyword3()
	{
		$key=$this ->input->get('don_key');
		

		$data = array(
			
			//'donatori'=> $this->donatori_m->get_donatori_activi(),
			'd'=> $this->donatori_m->get_carnete_donatori(),
			'donatori'=> $this->donatori_m->search3($key),
			'unread_msg'=>$this->email_m->get_unread_msg(),

			
		);

		//echo "data: <pre>".print_r($data,true)."</pre>";


		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('table/rejected-donors-table',$data);
		$this->load->view('layout/footer');
	
	}




}
