<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->helper("url");
	}
	public function index()
	{
		$this->load->view('search/index');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */