<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('email_m');
		$this->load->library('email'); 

	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('email/inbox');
		$this->load->view('layout/footer');
	}

		public function compose()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('email/compose');
		$this->load->view('layout/footer');
	}

		public function send()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('email/send-email');
		$this->load->view('layout/footer');
	}

		public function view()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('email/view-email');
		$this->load->view('layout/footer');
	}

	public function sendEmail()
    {

    	// require_once(APPPATH.'third_party/PHPMailer-master/PHPMailerAutoload.php');
     //    $mail = new PHPMailer();
     //    $mail->IsSMTP(); // we are going to use SMTP
     //    $mail->SMTPAuth   = true; // enabled SMTP authentication
     //    $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
     //    $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
     //    $mail->Port       = 465;                   // SMTP port to connect to GMail
     //    $mail->Username   = "dyusk.96@gmail.com";  // user email address
     //    $mail->Password   = "JeffDia23";            // password in GMail
     //    $mail->SetFrom('dyusk.96@gmail.com', 'Mail');  //Who is sending 
     //    $mail->isHTML(true);
     //    $mail->Subject    = "Mail Subject";
     //    $mail->Body      = '
     //        <html>
     //        <head>
     //            <title>Title</title>
     //        </head>
     //        <body>
     //        <h3>Heading</h3>
     //        <p>Message Body</p><br>
     //        <p>With Regards</p>
     //        <p>Your Name</p>
     //        </body>
     //        </html>
     //    ';
     //    $destino = 'dyusk_96@yahoo.com'; // Who is addressed the email to
     //    $mail->AddAddress($destino, "Receiver");
     //    if(!$mail->Send()) {
     //        return false;
     //    } else {
     //        return true;
     //    }

    	$localhosts = array(
    		'::1',
    		'127.0.0.1',
    		'localhost'
		);

		$protocol = 'mail';
		if (in_array($_SERVER['REMOTE_ADDR'], $localhosts)) {
    		$protocol = 'smtp';
		}

    	$config = array(
    		'protocol' => $protocol,
    		'smtp_host' => 'ssl://smtp.googlemail.com',
    		'smtp_port' => 465,
    		'smtp_user' => 'dyusk.96@gmail.com',
    		'smtp_pass' => 'JeffDia23',
    		'mailtype' => 'html',
    		'starttls'  => true,
    		'newline'   => "\r\n",
		);

		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->from("dyusk.96@gmail.com");
		$this->email->to("dyusk_96@yahoo.com");
		$this->email->subject("New user contacts");
		$this->email->message("final_mail");
		$flag = $this->email->send();

		if($flag){
    		echo "Email sent";
		}else{
    		echo "Email sending failed";
		}

		// $this->load->library('email',$config); 

  //       $this->email->from('dyusk.96@gmail.com', "Blood Bank");
  //       $this->email->to("dragan_diana96@yahoo.com");
  //       $this->email->cc("dyusk.96cc@gmail.com");
  //       $this->email->subject("This is test subject line");
  //       $this->email->message("Mail sent test message...");
        
  //       $data['message'] = "Sorry Unable to send email...";
  //       if ($this->email->send()) {
  //           $data['message'] = "Mail sent...";
  //       }
        
  //       // forward to index page
  //       //$this->load->view('index', $data);


  			// $this->load->library('email');
  			// $this->email->from('dyusk_96@yahoo.com', 'Blood Bank');
  			// $this->email->to('dragan_diana96@yahoo.com');
  			// $this->email->subject('This is my subject');
  			// $this->email->message('This is my message');

  			// $data['message'] = "Sorry Unable to send email...";
  		 //    if ($this->email->send()) {
  	  //          $data['message'] = "Mail sent...";
  	  //      }

  	      
	//	echo "data: <pre>".print_r($data,true)."</pre>";
  	       

    }

}

