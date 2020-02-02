<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesaje extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mesaje_m','mm');//incarca modelul
	}
	public function contact()
	{
		//functia cu ajutorul careia se incarca pagina de contact
		$this->load->view('layout/header'); //incarca header-ul
		$this->load->view('contact'); // incarca pagina de contact
		$this->load->view('layout/footer'); //incarca footer-ul
	}
	public function mesaje()
	{
		// functia cu ajutorul careia se trimit mesajele din pop-ul de propuneri
		$postData = $this->input->post(); //preia in variabila postData inputul de la utilizator
		$this->mm->mesaje($postData); // trimite inputul in functia mesaje din model
		redirect('index','refresh'); // redirectioneaza utilizatorul pe pagina de home
	}
}
