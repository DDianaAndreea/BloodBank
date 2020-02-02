<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cazuri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//incarca modelele
		$this->load->model('cazuri_m');
		$this->load->model('email_m');
	}
	public function index()
	{
		$data = array(// array cu datele necesare pentru pagina de cazuri
			'cazuri' =>$this->cazuri_m->get_info_cazuri(),
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar'); //incarca navbarul
		$this->load->view('table/cases-table',$data); // incarca pagina de cazuri
		$this->load->view('layout/footer');
	}
	public function view_caz()
	{
		$id=$this->uri->segment(3);// $id primeste prin url id-ul cazului
		$data = array(// array cu datele necesare pentru pagina unui caz cu id-ul spcificat
			'pacienti' =>$this->cazuri_m->get_info_pacient($id),
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar'); //incarca navbarul
		$this->load->view('caz',$data); // incarca pagina cazului
		$this->load->view('layout/footer');
	}
	public function public_caz()
	{ //publicarea cazului
		$postData = $this->input->post();
		$this->cazuri_m->public_caz($postData);
		redirect('pacienti','refresh'); //redirectioneaza utilizatorul pe pagina cu pacienti
	}
	public function delete()
	{ //sterge cazul cu id-ul specificat
		$id=$this->uri->segment(3);
		$this->cazuri_m->delete($id);
		redirect('cazuri','refresh'); //redirectioneaza utilizatorul pe pagina cu cazuri
	}
}
