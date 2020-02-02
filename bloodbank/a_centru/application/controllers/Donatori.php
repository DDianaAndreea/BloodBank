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
	{	//funcția ce încarcă pagina donatorilor activi și datele necesare.
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
		// paginatia dupa numarul de donatori
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();
		// preia in $data informatiile necesare de la donatori
        $data['donatori'] = $this->donatori_m->get_donatori($config["per_page"], $page);
        $data['d'] = $this->donatori_m->get_carnete_donatori();
        $data['unread_msg'] = $this->email_m->get_unread_msg();
		//incarca pagina de donatori activi
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
        $this->load->view('table/active-donors-table', $data);
		$this->load->view('layout/footer');
	}
	public function in_donors()
	{	//funcția care încarcă pagina donatorilor în așteptare și datele necesare
		$data = array(
			//$data primeste toate datele din tabel pentru donatorii in asteptare
			'donatori'=> $this->donatori_m->get_donatori_in_astetare(),
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('table/inactive-donors-table',$data);//se incarca pagina cu datele
		$this->load->view('layout/footer');
	}
	public function resp_donors()
	{	//funcția care încarcă pagina donatorilor respinsi și datele necesare
		$data = array(
			//$data primeste toate datele din tabel pentru donatorii resinsi
			'donatori'=> $this->donatori_m->get_donatori_respinsi(),
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('table/rejected-donors-table',$data);// incarca pagina donatorilor respinsi cu datele
		$this->load->view('layout/footer');
	}
	public function cereri_donatori()
	{	//functia care incarca pagina cu cererile de donare
		$data = array(
			'donatori'=> $this->donatori_m->get_cereri_donatori(), //retine toate datele din baza de date despre cererile donatorilor
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('cereri/cereri_donatori',$data);// incarca view-ul cu datele necesare
		$this->load->view('layout/footer');
	}
	public function chestionar()
	{	//functia ce incarca chestionarul unui donator
		$id=$this->uri->segment(3); // se primeste prin url id-ul donatorului
		// in variabila $data se retin toate indormatiile despre donatorul cu id-ul primit
		$data = array(
			'donatori' =>$this->donatori_m->get_info_donator($id),// preia datele personale din baza de date despre donator
			'carnet' =>$this->donatori_m->get_info_carnet($id),// preia datele din carnetul donatorului
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		//apoi se incarca chestionarul cu informatiile despre donator
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('chestionar',$data);//incarca view-ul de chestionar
		$this->load->view('layout/footer');
	}
	public function carnetul_donatorului()
	{	//funcția care încarcă pagina cu carnetul donatorului și datele necesare
		$id=$this->uri->segment(3); // se primeste id-ul donatorului prin url
		// array-ul data retine toate datele necesare din baza de date
		$data = array(
			'donatori' =>$this->donatori_m->get_info_donator($id),
			'carnet' =>$this->donatori_m->get_info_carnet($id),
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('carnetul_donatorului',$data);// se incarca pagina de carnet a donatorului cu datele
		$this->load->view('layout/footer');
	}
	public function send_email_r_d()
	{	//functia care incarca pagina de raspuns a centrului pentru pacientii carora nu li se aproba doarea
		$id=$this->uri->segment(3);
		$data = array(
			'mesaj'=> $this->donatori_m->get_donator_respins($id),
			'unread_msg'=>$this->email_m->get_unread_msg(),
		);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/navbar');
		$this->load->view('email/response',$data);//se incarca pagina cu daatele din array-ul data
		$this->load->view('layout/footer');
	}
}
