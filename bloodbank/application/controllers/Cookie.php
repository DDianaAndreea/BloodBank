<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesaje extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('cookie_m');
		$this->load->helper('cookie');

		
	}


	
}