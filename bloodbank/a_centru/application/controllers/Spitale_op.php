<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spitale_op extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('spitale_m');
		$this->load->model('stocuri_m');
		$this->load->model('email_m');
	}
	public function make_active()
	{	//primeste prin url id-ul cererii
		$id = $this->uri->segment(3);
		$this->spitale_m->make_active($id); // face cererea cu id ul specificat activa
		redirect('spitale/cereri_spitale','refresh'); // redirectioneaza pe pagina de cereri de la spitale
	}
	public function delete()
	{	//primeste prin url id ul cererii
		$id=$this->uri->segment(3);
		$this->spitale_m->delete($id);// sterge din baza de date cererea cu id ul specificat
		redirect('spitale/cereri_spitale','refresh');// da refresh la  pagina cu cererile spitalelor
	}
	public function delete_spital()
	{	//primeste prin url id-ul cererii
		$id=$this->uri->segment(3);
		$cantitate_spital= $this->spitale_m->get_cantitate($id);// se ia din baza de date cantitatea din cerere
		$grupa=$this->spitale_m->get_grupa($id); 	//grupa sanguina pentru care s a facut cererea
		$rh=$this->spitale_m->get_rh($id); 			// si rh ul

		// echo "cantitate_spital: <pre>".print_r($cantitate_spital,true)."</pre>";
		// echo "grupa: <pre>".print_r($grupa,true)."</pre>";
		// echo "rh: <pre>".print_r($rh,true)."</pre>";

		$cantitate_stoc = $this->spitale_m->get_cantitate_stoc($grupa[0]->grupa, $rh[0]->rh); // se stocheaza stocul pentru grupa si rh ul cerut
		$id_stoc = $this->spitale_m->get_id_stoc($grupa[0]->grupa, $rh[0]->rh); // se stocheaza in variabila $id_stoc id-ul stocului cerut

		// echo "Cantitate stoc: <pre>".print_r($cantitate_stoc,true)."</pre>";
		// echo "ID stoc: <pre>".print_r($id_stoc,true)."</pre>";

		foreach($cantitate_stoc as $cantitate){// se actualizeaza stocul sanguin in baza de date
			$this->stocuri_m->actualizare_stoc_spital($id_stoc[0]->id, $cantitate->cantitate-$cantitate_spital[0]->cantitate);
		}
		$this->spitale_m->delete($id); // se sterge cererea cu id ul specificat

		redirect('spitale/index','refresh');// se face refresh
	}
}
