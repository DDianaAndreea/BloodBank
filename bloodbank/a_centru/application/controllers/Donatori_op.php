<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donatori_op extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('donatori_m');
		$this->load->model('stocuri_m');
		$this->load->model('email_m');
		$this->load->library("pagination");
		$this->load->model('home_m');
	}

	public function delete_donator()
	{	//functia care sterge un donator sau il face inactiv
		$id=$this->uri->segment(3); //se primeste prin url id-ul acestuia
		//se pun in variabile numele,prenumele si emailul donatorului cu id-ul specificat
		$nume = $this->donatori_m->get_nume_donator($id);
		$prenume = $this->donatori_m->get_prenume_donator($id);
		$email = $this->donatori_m->get_email_donator($id);

		// echo "nume: <pre>".print_r($nume,true)."</pre>";
		// echo "pre: <pre>".print_r($prenume,true)."</pre>";
		// echo "e: <pre>".print_r($email,true)."</pre>";

		$this->donatori_m->send_email_delete($nume,$prenume,$email);// se trimite email donatorului
		$this->donatori_m->delete($id);// se sterge donatorul din baza de date

		redirect('donatori/cereri_donatori','refresh');// se da refresh la pagina de cereri
	}

	public function in_asteptare()
	{	//functia care schimba starea unui donator
		$id=$this->uri->segment(3);// primeste id-ul donatorului prin url
		//se pune in variabile datele necesare despre donator
		$nume = $this->donatori_m->get_nume_donator($id);
		$prenume = $this->donatori_m->get_prenume_donator($id);
		$email = $this->donatori_m->get_email_donator($id);

		$this->donatori_m->send_email_in_asteptare($nume,$prenume,$email);// se trimite email catre donator
		$this->donatori_m->in_asteptare($id); //se actualizeaza starea donatorului in baza de date

		redirect('donatori/in_donors','refresh'); // se face refresh la pagina
	}

	public function activare()
	{	//functia care schimba starea unui donator in donator activ
		$id=$this->uri->segment(3);// primeste id-ul donatorului prin url
		//se pune in variabile datele necesare despre donator
		$nume = $this->donatori_m->get_nume_donator($id);
		$prenume = $this->donatori_m->get_prenume_donator($id);
		$email = $this->donatori_m->get_email_donator($id);

		$this->donatori_m->send_email_activare($nume,$prenume,$email);//se trimite email
		$this->donatori_m->activare($id); //se actualizeaza starea donatorului

		redirect('donatori/in_donors','refresh');// se face refresh pe pagina de donatori inactovi
	}

	public function donator_respins()
	{	// functia care schimba starea unui donator in donator respins
		$id=$this->uri->segment(3);//se primeste id-ul donatorului prin url
		//se pune in variabile datele necesare pentru donatorul cu id-ul specificat
		$nume = $this->donatori_m->get_nume_donator($id);
		$prenume = $this->donatori_m->get_prenume_donator($id);
		$email = $this->donatori_m->get_email_donator($id);

		$this->donatori_m->send_email_respingere($nume,$prenume,$email);//se trimite email donatorului
		$this->donatori_m->donator_respins($id); // se actualizeaza starea

		redirect('donatori/in_donors','refresh');// se face refresh pe pagina cu donatori inactivi
	}

	public function date_personale()
	{	//funcția care crează carnetul donatorului.
		$postData = $this->input->post();//primeste datele utilizatorului in variabila $postData
		$id=$this->uri->segment(3); //primeste prin url id-ul donatorului
		$this->donatori_m->date_personale($id,$postData); //paseaza datele functiei din model pentru a le insera in baza de date

		redirect('donatori/chestionar/'.$id,'refresh');// se face refresh pe pagina de chestionar a donatorului
	}

	public function donare_azi()
	{	//primeste prin url si incarca in variabile id-ul donatorului,grupa sanguina si rh-ul
		$id=$this->uri->segment(3);
		$grupa=$this->uri->segment(4);
		$rh=$this->uri->segment(5);
		//se ia din baza de date datele necesare despre pacientul cu id-ul primit
		$email=$this->donatori_m->get_email_donator($id);
		$nume=$this->donatori_m->get_nume_donator($id);
		$prenume=$this->donatori_m->get_prenume_donator($id);
		// se trimite un email automat catre pacientul cu datele specificare
		$this->donatori_m->send_email_donare($email,$nume,$prenume);
		//se actualizeaza in functia din model data donarii pt donatorul cu id ul specificat
		$this->donatori_m->donare_azi($id);

		//se actualizeaza stocul
		$cantitate_res = $this->stocuri_m->get_cantitate($grupa, $rh);
		//echo "Cantitate: <pre>".print_r($cantitate_res,true)."</pre>";
		foreach($cantitate_res as $cantitate){
			$this->stocuri_m->actualizare_stoc_donator($cantitate->ID, $cantitate->cantitate+1);
		}
		redirect('donatori/index','refresh'); //se face refresh la pagina de donatori
	}

	public function donare_azi_home()
	{	//primeste prin url si incarca in variabile id-ul donatorului,grupa sanguina si rh-ul
		$id=$this->uri->segment(3);
		$grupa=$this->uri->segment(4);
		$rh=$this->uri->segment(5);
		//se ia din baza de date datele necesare despre pacientul cu id-ul primit
		$email=$this->donatori_m->get_email_donator($id);
		$nume=$this->donatori_m->get_nume_donator($id);
		$prenume=$this->donatori_m->get_prenume_donator($id);
		// se trimite un email automat catre pacientul cu datele specificare
		$this->donatori_m->send_email_donare($email,$nume,$prenume);
		//se actualizeaza in functia din model data donarii pt donatorul cu id ul specificat
		$this->donatori_m->donare_azi($id);
		//se actualizeaza stocul
		$cantitate_res = $this->stocuri_m->get_cantitate($grupa, $rh);
		//echo "Cantitate: <pre>".print_r($cantitate_res,true)."</pre>";
		foreach($cantitate_res as $cantitate){
			$this->stocuri_m->actualizare_stoc_donator($cantitate->ID, $cantitate->cantitate+1);
		}
		redirect('admin/index','refresh');//se face refresh la pagina de home
	}

	public function modifica_gr_rh()
	{	//functia care ajuta la modificarea grupei sau rh-ului unui donator
		$postData=$this->input->post();
		$id=$this->uri->segment(3);

		$this->donatori_m->modifica_gr_rh($id,$postData);
		// echo "postData: <pre>".print_r($postData,true)."</pre>";
		// echo "id: <pre>".print_r($id,true)."</pre>";
		redirect('donatori/in_donors','refresh');
	}

}
