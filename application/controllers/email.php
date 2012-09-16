<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		log_message('info', 'Send Email');
		$config = Array(
			'protocol' =>'smtp',
			'smtp_host' => 'smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_crypto' => 'ssl',
			'smtp_user' => 'furionapps',
			'smtp_pass' => 's4l4ken4m',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1'
		);
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		$this->email->from('furionapps@gmail.com', 'furionapps');
		$this->email->to('furqon17@gmail.com');  
		$this->email->subject('This is an email test');  
		$this->email->message('It is working. Great!');
		$result = $this->email->send();
		echo $this->email->print_debugger();
			
		//$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */