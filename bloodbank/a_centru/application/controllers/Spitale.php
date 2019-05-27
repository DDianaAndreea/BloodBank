<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spitale extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('spitale_m');
		$this->load->model('stocuri_m');


	}

	public function index()
	{
		$data = array(
			'spitale' => $this->spitale_m->get_spitale_active(), 
			'stocuri'=>$this->stocuri_m->get_stoc(),
		);

		 //echo "stocuri: <pre>".print_r($data['stoc'],true)."</pre>";

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('table/hospitals-table',$data);
		$this->load->view('layout/footer');
	}

	
	public function cereri_spitale(){

		$data = array(
			'spitale'=> $this->spitale_m->get_cereri_spitale(),
		);

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('cereri/cereri_spitale',$data);
		$this->load->view('layout/footer');
	}

		public function make_active()
	{
		$id = $this->uri->segment(3);

		$this->spitale_m->make_active($id);
		

		redirect('spitale/cereri_spitale','refresh');
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->spitale_m->delete($id);

		redirect('spitale/cereri_spitale','refresh');
	}

	public function delete_spital(){
		$id=$this->uri->segment(3);
		$cantitate_spital= $this->spitale_m->get_cantitate($id);
		$grupa=$this->spitale_m->get_grupa($id);

		$rh=$this->spitale_m->get_rh($id);

		// echo "cantitate_spital: <pre>".print_r($cantitate_spital,true)."</pre>";
		// echo "grupa: <pre>".print_r($grupa,true)."</pre>";
		// echo "rh: <pre>".print_r($rh,true)."</pre>";


		$cantitate_stoc = $this->spitale_m->get_cantitate_stoc($grupa[0]->grupa, $rh[0]->rh);
		$id_stoc = $this->spitale_m->get_id_stoc($grupa[0]->grupa, $rh[0]->rh);

		// echo "Cantitate stoc: <pre>".print_r($cantitate_stoc,true)."</pre>";
		// echo "ID stoc: <pre>".print_r($id_stoc,true)."</pre>";


		foreach($cantitate_stoc as $cantitate){
			$this->stocuri_m->actualizare_stoc_spital($id_stoc[0]->id, $cantitate->cantitate-$cantitate_spital[0]->cantitate);
		 }

		$this->spitale_m->delete($id);

		redirect('spitale/index','refresh');
	}


}