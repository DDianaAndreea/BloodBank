<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('email_m');
		$this->load->library('email');
	}
	public function sendEmail()
	{	// functia care trimite emaailul si redirectioneaza catre pagina de inbox
		$postData = $this->input->post();//primeste in variabila postData toate inputurile utilizatorului
		//echo "<pre>".print_r($postData,true)."</pre>";

		$email=$postData['email'];
		$subiect=$postData['subiect'];
		$mesaj=$postData['mesaj'];
		//echo "<pre>".print_r($mesaj,true)."</pre>";

		$this->email_m->sendEmail($email,$subiect,$mesaj);//trimite cu ajutorul functiei din model mesajul si subiectul specificate catre emailul specificat
		redirect('email/index','refresh'); // incarca pagina de inbox
	}
	public function sendEmail_v()
	{	// incarca pagina de trimitere email pentu toti voluntarii
		$postData = $this->input->post(); //primeste in variabila postData toate inputurile utilizatorului

		$subiect=$postData['subiect'];
		$mesaj=$postData['mesaj'];
		$emails=$this->email_m->get_email_voluntari(); // primeste din baza de date adresele tuturor voluntarilor

		// echo "<pre>".print_r($emails,true)."</pre>";
		// echo "<pre>".print_r($subiect,true)."</pre>";
		// echo "<pre>".print_r($mesaj,true)."</pre>";

		foreach ($emails as $email) { //pentru fiecare adresa primita trimite email
			$this->email_m->sendEmail($email->email,$subiect,$mesaj);
		}
		redirect('email/index','refresh'); //incarca pagina de inbox
	}
	public function sendEmail_d()
	{	//trimitere email donatorilor cu anumite criterii grupa rh
		$postData = $this->input->post();//primeste in variabila postData toate inputurile utilizatorului

		$subiect=$postData['subiect'];
		$mesaj=$postData['mesaj'];
		$grupa=$postData['grupa'];
		$rh=$postData['rh'];

		// echo "<pre>".print_r($subiect,true)."</pre>";
		// echo "<pre>".print_r($mesaj,true)."</pre>";
		// echo "<pre>".print_r($grupa,true)."</pre>";
		// echo "<pre>".print_r($rh,true)."</pre>";

		//trimite mesaj donatorilor cu grupa, rh ul specificate sau tuturor in cazul in care campurile sunt goale
		if ($grupa!='' && $rh!='') { //  se trimite email catre toti donatorii activi cu rh ul si grupa precizate
			$emails=$this->email_m->get_email_donatori_activi_($grupa,$rh);
			foreach ($emails as $email) {
				$this->email_m->sendEmail($email->email,$subiect,$mesaj);
			}
		}elseif($grupa!='' && $rh!='0'){ //daca doar  grupa este completata se timit mailuri donatorilo cu grupa respectiva
			$emails=$this->email_m->get_email_donatori_activi_gr($grupa);
			foreach ($emails as $email) {
				$this->email_m->sendEmail($email->email,$subiect,$mesaj);
			}
		}else{
			$emails=$this->email_m->get_email_donatori_activi(); //daca nici una nu este completata se trimite email la tot donatorii activi
			foreach ($emails as $email) {
				$this->email_m->sendEmail($email->email,$subiect,$mesaj);
			}
		}
		//echo "<pre>".print_r($emails,true)."</pre>";
		redirect('email/index','refresh'); //redirectioneaza pe pagina de inbox
	}
	public function delete_msg()
	{	//functia care sterge mesajele cu id-ul trimis prin url
		$id=$this->uri->segment(3);
		$this->email_m->delete_msg($id);

		redirect('email/index','refresh');//redirectioneaza pe pagina de inbox
	}
}
