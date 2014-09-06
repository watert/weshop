<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper("url");
	}
	public function index()
	{
		$this->load->view('detail/index');
	}
	public function wish(){
		$this->load->view('detail/wish');

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */