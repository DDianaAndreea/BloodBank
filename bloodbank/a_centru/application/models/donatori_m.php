<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class donatori_m extends CI_Model {

	function get_cereri_donatori(){
		$this->db->select('*');
		$this->db->from('donatori');
		$this->db->where('activ','0');

		$query=$this->db->get();

		return $query->result();
	}

	function get_donatori_activi(){
		$this->db->select('*');
		$this->db->from('donatori');
		$this->db->where('activ','2');
		$this->db->order_by('nume','asc');

		$query=$this->db->get();

		return $query->result();
	}

	function get_donatori_in_astetare(){
		$this->db->select('*');
		$this->db->from('donatori');
		$this->db->where('activ','1');
		$this->db->order_by('nume','asc');

		$query=$this->db->get();

		return $query->result();
	}
	function get_donatori_respinsi(){
		$this->db->select('*');
		$this->db->from('donatori');
		$this->db->where('activ','3');
		$this->db->order_by('nume','asc');

		$query=$this->db->get();

		return $query->result();
	}

	function get_info_donator($id_donator){
		$this->db->select('*');
		$this->db->from('donatori');
		$this->db->where('ID',$id_donator);

		$query=$this->db->get();

		return $query->result();
	}

	function get_nume_donator($id_donator){
		$this->db->select('nume');
		$this->db->from('donatori');
		$this->db->where('ID',$id_donator);

		$query=$this->db->get();

		return $query->result();
	}

	function get_prenume_donator($id_donator){
		$this->db->select('prenume');
		$this->db->from('donatori');
		$this->db->where('ID',$id_donator);

		$query=$this->db->get();

		return $query->result();
	}

	function get_email_donator($id_donator){
		$this->db->select('email');
		$this->db->from('donatori');
		$this->db->where('ID',$id_donator);

		$query=$this->db->get();

		return $query->result();
	}

	function delete($id_donator){
		$this->db->where('ID', $id_donator);
		$this->db->delete('donatori');
	}

	function send_email_delete($nume,$prenume,$email)
	{
		$this->load->library('email');

    	//SMTP & mail configuration
    	$config = array(
      	'protocol'  => 'smtp',
      	'smtp_host' => 'ssl://smtp.googlemail.com',
      	'smtp_port' => 465,
      	'smtp_user' => 'centrulBloodBank@gmail.com',
      	'smtp_pass' => 'bloodbank2019',
      	'mailtype'  => 'html',
      	'charset'   => 'utf-8'
    	);
    	
    	$this->email->initialize($config);
    	$this->email->set_mailtype("html");
    	$this->email->set_newline("\r\n");

    	//Email content
    	$htmlContent = '<p>Dragă '.$prenume[0]->prenume.' '.$nume[0]->nume.',</p>';
    	$htmlContent .= '<p>Îți mulțumim pentru încrederea acordată și dorința ta de a colabora cu centrul nostru.</p>';
    	$htmlContent .= '<p>Însă nu îndeplinești cerințele necesare donării.</p>';
    	$htmlContent .= '<p>Cu drag,</p>';
    	$htmlContent .= '<p>Echipa Blood Bank.</p>';


    	$this->email->to($email[0]->email);
    	$this->email->from('centrulBloodBank@gmail.com','Blood Bank');
    	$this->email->subject('Verificare donator');
    	$this->email->message($htmlContent);

    	//Send email
    	$this->email->send();
	}



	function in_asteptare($id_donator){
		$data = [
            'activ' => '1',
        ];
		$this->db->where('ID', $id_donator);
		$this->db->update('donatori',$data);
	}

	function send_email_in_asteptare($nume,$prenume,$email)
	{
		$this->load->library('email');

    	//SMTP & mail configuration
    	$config = array(
      	'protocol'  => 'smtp',
      	'smtp_host' => 'ssl://smtp.googlemail.com',
      	'smtp_port' => 465,
      	'smtp_user' => 'centrulBloodBank@gmail.com',
      	'smtp_pass' => 'bloodbank2019',
      	'mailtype'  => 'html',
      	'charset'   => 'utf-8'
    	);
    	
    	$this->email->initialize($config);
    	$this->email->set_mailtype("html");
    	$this->email->set_newline("\r\n");

    	//Email content
    	$htmlContent = '<p>Dragă '.$prenume[0]->prenume.' '.$nume[0]->nume.',</p>';
    	$htmlContent .= '<p>Ai trecut chestionarul donatorului și statusul tău actual este de donator în aștetare până la verificarea analizelor de laborator.</p>';
    	$htmlContent .= '<p> </p>';
    	$htmlContent .= '<p>Îți mulțumim pentru încrederea acordată și dorința ta de a colabora cu centrul nostru.</p>';
    	$htmlContent .= '<p>Cu drag,</p>';
    	$htmlContent .= '<p>Echipa Blood Bank.</p>';


    	$this->email->to($email[0]->email);
    	$this->email->from('centrulBloodBank@gmail.com','Blood Bank');
    	$this->email->subject('Verificare donator');
    	$this->email->message($htmlContent);

    	//Send email
    	$this->email->send();
	}


	function activare($id_donator){
		$data = [
            'activ' => '2',
        ];
		$this->db->where('ID', $id_donator);
		$this->db->update('donatori',$data);
	}

	function donator_respins($id_donator){
		$data = [
            'activ' => '3',
        ];
		$this->db->where('ID', $id_donator);
		$this->db->update('donatori',$data);
	}

	function date_personale($id,$postData){
		$data= array(
			'id'=> $id,
 			'cnp' => $postData['cnp'],
 			'seria' => $postData['seria'],
 			'numarul' => $postData['numarul'],
 			'localitate' => $postData['localitate'],
 			'judet' => $postData['judet'],
 			'adresa' => $postData['adresa']
 		);
 			$this->db->insert('carnetul_donatorului',$data);
	}

	function get_info_carnet($id){
		$this->db->select('*');
		$this->db->from('carnetul_donatorului');
		$this->db->where('ID',$id);

		$query=$this->db->get();

		return $query->result();
	}

	function get_carnete_donatori(){
		$this->db->select('*');
		$this->db->from('carnetul_donatorului');

		$query=$this->db->get();

		return $query->result();
	}

	function donare_azi($id){
		$data = [
            'data_ultimei_donari'  => date('Y-m-d H:i:s'),
        ];
        $this->db->where('ID', $id);
		$this->db->update('carnetul_donatorului',$data);
	}

	function modifica_gr_rh($id,$postData){
		$data= array(
			'rh'=> $postData['rh'],
 			'grupa_sanguina' => $postData['grupa_sanguina'],
 			
 		);
 			$this->db->where('ID',$id);
			$this->db->update('donatori',$data);

	}

	 function search($key)
	{
		$this->db->where('activ','2');
		$this->db->like('nume', $key);
		$this->db->or_like('prenume', $key);
		$this->db->or_like('grupa_sanguina', $key);

		
		

		$query=$this->db->get('donatori');
		return $query->result();
	}


	// function fetch_data($query)
 // 	{
 //  		$this->db->select("*");
 //  		$this->db->from("donatori");
 //  		if($query != '')
 //  		{
 //   			$this->db->like('nume', $query);
 //   			$this->db->or_like('prenume', $query);
 //   			$this->db->or_like('adresa', $query);
 //   			$this->db->or_like('localitate', $query);
 //  		}
 //  		return $this->db->get();
 // 	}


	}