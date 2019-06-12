<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class email_m extends CI_Model {

  public function get_mesaje(){
    $this->db->select('*');
    $this->db->from('mesaje');
    $this->db->order_by('data','desc');

    $query=$this->db->get();

    return $query->result();
  
  }

  public function get_mesaj($id){
    $this->db->select('*');
    $this->db->from('mesaje');
    $this->db->where('ID',$id);

    $query=$this->db->get();

    return $query->result();
  
  }
  public function read_msg($id){
    $data = [
            'stare_email' => '1',
        ];
    $this->db->where('ID', $id);
    $this->db->update('mesaje',$data);
  }


	public function sendEmail($email,$subiect,$mesaj){
    //Load email library
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
    //$htmlContent = $mesaj;
    

    $this->email->to($email);
    $this->email->from('centrulBloodBank@gmail.com','Blood Bank');
    $this->email->subject($subiect);
    $this->email->message($mesaj);

    //Send email
    $this->email->send();

    
  }

  public function delete_msg($id){
    $this->db->where('ID', $id);
    $this->db->delete('mesaje');
  }

  public function get_email_voluntari(){
    $this->db->select('email');
    $this->db->from('voluntari');
    $this->db->where('tip','voluntar');

    $query=$this->db->get();

    return $query->result();
  }
  
  public function get_email_donatori_activi(){
    $this->db->select('email');
    $this->db->from('donatori');
    $this->db->where('activ','2');

    $query=$this->db->get();

    return $query->result();
  }

  public function get_email_donatori_activi_($grupa,$rh){
    $this->db->select('email');
    $this->db->from('donatori');
    $this->db->where('activ','2');
    $this->db->where('grupa_sanguina',$grupa);
    $this->db->where('rh',$rh);


    $query=$this->db->get();

    return $query->result();
  }

  public function get_unread_msg(){

    $this->db->select('*');
    $this->db->from('mesaje');
    $this->db->where('stare_email', '0');
    
    $query = $this->db->get();
    $result = $query->result();
    
    return count( $result );

  }


}
