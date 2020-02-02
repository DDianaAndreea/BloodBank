<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_m');
	}
	public function login(){
		// verifică sesiunea,în cazul unei sesiuni deja existente suntem redirecționați pe pagina principală a centrului,
		if($this->session->userdata('logged_in') && $this->session->userdata('admin_logged_in')){
			redirect('dashboard','refresh');
		}
		//in caz cotrar se reincarca pagina de login
		$this->load->view('auth/login');
	}
	public function verify_admin_login()
	{	//primește datele din pagina de autentificare și le pasează către funcția din model
		$postData = $this->input->post();
        $validate = $this->auth_m->verify_login($postData);
        // echo "Validate: <pre>".print_r($validate, true)."</pre>";
        // die();
		if(count($validate)>0)
		{	//daca datele se afla in baza de date
			// echo "Set session...";
			$this->set_session($validate); // se creaza sesiunea cu datele curente
			redirect('dashboard','refresh'); //redirectioneaza utilizatorul pe dashboard
		}
		else
			redirect('login','refresh'); //in caz contrar se reincarca pagina de login
	}
	public function set_session($validate)
	{	//setează o sesiune nouă cu datele pe care le primeșt cu ajutorul variabilei $validate
        $sess_data = array(
            'email' => $validate[0]->email,
            'logged_in' => true,
            'admin_logged_in' => true
        );
        // echo "SESS DATA: <pre>".print_r($sess_data,true)."</pre>";
        $this->session->set_userdata($sess_data);
    }

    public function logout()
	{	//distruge sesiunea curentă și redirecționează utilizatorul pe pagina de autentificare
        $this->session->sess_destroy();
        redirect('login');
    }
}
