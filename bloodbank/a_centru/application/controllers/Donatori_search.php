<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donatori_search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('donatori_m');
		$this->load->model('stocuri_m');
		$this->load->model('email_m');
		$this->load->library("pagination");
		$this->load->model('home_m');
	}
	public function skeyword()
	{ // cauta cuvintele cheie in donatorii activi
		$key=$this ->input->get('don_key');
		$data = array(
			//'donatori'=> $this->donatori_m->get_donatori_activi(),
			'd'=> $this->donatori_m->get_carnete_donatori(),// array cu toate datele din carnetele donatorilor
			'donatori'=> $this->donatori_m->search($key),  // cauta printre donatorii activi daca este cineva cu $key in nume sau prenume
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		//echo "data: <pre>".print_r($data,true)."</pre>";
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		//reîncarcă pagina donatorilor activi cu datele rezultate în urma căutărilor
		$this->load->view('table/active-donors-table-s',$data);
		$this->load->view('layout/footer');
	}
	public function skeyword2()
	{	//încarcă pagina donatorilor inactivi cu datele rezultate în urma căutărilor
		$key=$this ->input->get('don_key');
		$data = array(
			//'donatori'=> $this->donatori_m->get_donatori_activi(),
			'd'=> $this->donatori_m->get_carnete_donatori(),// array cu toate datele din carnetele donatorilor
			'donatori'=> $this->donatori_m->search2($key), // cauta printre donatorii inactivi daca este cineva cu $key in nume sau prenume
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		//echo "data: <pre>".print_r($data,true)."</pre>";
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('table/inactive-donors-table',$data);//reîncarcă pagina donatorilor inactivi cu datele rezultate în urma căutărilor
		$this->load->view('layout/footer');
	}
	public function skeyword3()
	{	//încarcă pagina donatorilor respinsi cu datele rezultate în urma căutărilor
		$key=$this ->input->get('don_key');
		$data = array(
			//'donatori'=> $this->donatori_m->get_donatori_activi(),
			'd'=> $this->donatori_m->get_carnete_donatori(),// array cu toate datele din carnetele donatorilor
			'donatori'=> $this->donatori_m->search3($key), // cauta printre donatorii respinsi daca este cineva cu $key in nume sau prenume
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		//echo "data: <pre>".print_r($data,true)."</pre>";
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('table/rejected-donors-table',$data);//reîncarcă pagina donatorilor respinsi cu datele rezultate în urma căutărilor
		$this->load->view('layout/footer');
	}
}
