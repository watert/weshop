<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Friends extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper("url");
	}
	public function index()
	{
		$this->load->view('friends/index');
	}
	public function invite()
	{
		$this->load->view('friends/index-invite');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */