<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stoc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('stocuri_m');

	}

	public function index()
	{
		$data = array(
			
			
			'grupa0'=> $this->stocuri_m->get_nr_0(),
			'grupaA'=> $this->stocuri_m->get_nr_A(),
			'grupaB'=> $this->stocuri_m->get_nr_B(),
			'grupaAB'=> $this->stocuri_m->get_nr_AB(),
			'stocuri'=>$this->stocuri_m->get_stoc(),
		);

		
			
	

		 // echo "	Data: <pre>".print_r($data,true)."</pre>";

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('stoc/stoc',$data);
		$this->load->view('layout/footer');
	}

	public function scade_stoc(){
		$postData=$this->input->post();
		 //echo "	Data: <pre>".print_r($postData,true)."</pre>";

		 $cantitate_res = $this->stocuri_m->get_cantitate($postData['grupa'], $postData['rh']);

		 foreach($cantitate_res as $cantitate){
			$this->stocuri_m->actualizare_stoc($postData['grupa'],$postData['rh'],$cantitate->cantitate-$postData['cantitate_de_scazut']);
		}
		redirect('stoc/index','refresh');
	}

	public function creste_stoc(){
		$postData=$this->input->post();
		 //echo "	Data: <pre>".print_r($postData,true)."</pre>";

		 $cantitate_res = $this->stocuri_m->get_cantitate($postData['grupa'], $postData['rh']);

		 foreach($cantitate_res as $cantitate){
			$this->stocuri_m->actualizare_stoc($postData['grupa'],$postData['rh'],$cantitate->cantitate+$postData['cantitate_de_scazut']);
		}
		redirect('stoc/index','refresh');
	}

}

