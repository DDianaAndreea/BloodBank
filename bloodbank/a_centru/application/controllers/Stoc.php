<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stoc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('stocuri_m');
		$this->load->model('email_m');
	}
	public function index()
	{
		$data = array(// se stocheaza un array cu toate informatiile din baza de date despre stocuri
			'grupa0'=> $this->stocuri_m->get_nr_0(),
			'grupaA'=> $this->stocuri_m->get_nr_A(),
			'grupaB'=> $this->stocuri_m->get_nr_B(),
			'grupaAB'=> $this->stocuri_m->get_nr_AB(),
			'stocuri'=>$this->stocuri_m->get_stoc(),
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		 // echo "	Data: <pre>".print_r($data,true)."</pre>";
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('stoc/stoc',$data);// se incarca view ul de stoc cu datele din baza de date
		$this->load->view('layout/footer');
	}
	public function scade_stoc()
	{
		$postData=$this->input->post();// se preia datele de la utilizator
		 //echo "	Data: <pre>".print_r($postData,true)."</pre>";
		 $cantitate_res = $this->stocuri_m->get_cantitate($postData['grupa'], $postData['rh']); // se retine cantitatea cu grupa si rh ul specificat de utilizator

		 foreach($cantitate_res as $cantitate){// se actualizeaza stocul
			$this->stocuri_m->actualizare_stoc($postData['grupa'],$postData['rh'],$cantitate->cantitate-$postData['cantitate_de_scazut']);
		}
		redirect('stoc/index','refresh');// se reincarca pagina de stocuri
	}
	public function creste_stoc()
	{
		$postData=$this->input->post();// se preia datele de la utilizator
		 //echo "	Data: <pre>".print_r($postData,true)."</pre>";
		 $cantitate_res = $this->stocuri_m->get_cantitate($postData['grupa'], $postData['rh']);// se retine cantitatea cu grupa si rh ul specificat de utilizator

		 foreach($cantitate_res as $cantitate){ // se actualizeaza stocul
			$this->stocuri_m->actualizare_stoc($postData['grupa'],$postData['rh'],$cantitate->cantitate+$postData['cantitate_de_scazut']);
		}
		redirect('stoc/index','refresh');// se reincarca pagina de stocuri
	}
}

