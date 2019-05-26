<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donatori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('donatori_m');
		$this->load->model('stocuri_m');

	}

	public function index()
	{
		$data = array(
			
			'donatori'=> $this->donatori_m->get_donatori_activi(),
			'd'=> $this->donatori_m->get_carnete_donatori(),
			
		);

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('table/active-donors-table',$data);
		$this->load->view('layout/footer');
	}

	public function in_donors()
	{
		$data = array(
			
			'donatori'=> $this->donatori_m->get_donatori_in_astetare(),
		);

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('table/inactive-donors-table',$data);
		$this->load->view('layout/footer');
	}

	public function resp_donors(){
		$data = array(
			
			'donatori'=> $this->donatori_m->get_donatori_respinsi(),
		);

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('table/rejected-donors-table',$data);
		$this->load->view('layout/footer');
	}
	

	public function cereri_donatori()
	{
		$data = array(
			
			'donatori'=> $this->donatori_m->get_cereri_donatori(),
		);

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('cereri/cereri_donatori',$data);
		$this->load->view('layout/footer');
	}

	public function chestionar(){
		$id=$this->uri->segment(3);

		$data = array(
			'donatori' =>$this->donatori_m->get_info_donator($id),
			'carnet' =>$this->donatori_m->get_info_carnet($id)
		);
		

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('chestionar',$data);
		$this->load->view('layout/footer');
	}

	public function delete_donator()
	{
		$id=$this->uri->segment(3);
		$this->donatori_m->delete($id);

		redirect('donatori/cereri_donatori','refresh');

	}

	public function in_asteptare(){
		$id=$this->uri->segment(3);
		$this->donatori_m->in_asteptare($id);

		redirect('donatori/in_donors','refresh');
	}

	public function activare(){
		$id=$this->uri->segment(3);
		$this->donatori_m->activare($id);

		redirect('donatori/in_donors','refresh');
	}

	public function donator_respins(){
		$id=$this->uri->segment(3);
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
			'carnet' =>$this->donatori_m->get_info_carnet($id)
		);
		

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('carnetul_donatorului',$data);
		$this->load->view('layout/footer');
	}

	public function donare_azi(){

		$id=$this->uri->segment(3);
		$grupa=$this->uri->segment(4);
		$rh=$this->uri->segment(5);
		
		$this->donatori_m->donare_azi($id);

		$cantitate_res = $this->stocuri_m->get_cantitate($grupa, $rh);

		//echo "Cantitate: <pre>".print_r($cantitate_res,true)."</pre>";
		foreach($cantitate_res as $cantitate){
			$this->stocuri_m->actualizare_stoc_donator($cantitate->ID, $cantitate->cantitate+1);
		}
		

		redirect('donatori/index','refresh');
	}

}