<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usercenter extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper("url");
	}
	public function index()
	{
		$this->load->view('usercenter/index');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */