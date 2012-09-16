<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

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
        $this->load->model('Mgeneral');
        $data = $this->Mgeneral->list_category();
        $total = 100;
		  $json_data = '{"total":"'.$total.'","data":'.json_encode($data).'}';
		  $this->output
		  		->set_header('Access-Control-Allow-Origin: *')
		  		->set_header('Access-Control-Allow-Methods: GET')
				->set_header('Pragma: no-cache')
				->set_header('Access-Control-Allow-Credentials: true') 
				->set_header('Access-Control-Allow-Headers:X-Requested-With, authorization')
				->set_content_type('text/json')
		  		->set_content_type('application/json')
    			->set_output($json_data);
	         //$this->load->view('category',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */