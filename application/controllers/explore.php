<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Explore extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->helper("url");
	}
	public function select_channels(){

		$this->load->view('explore/select-channels');
	}
	public function index()
	{
		$this->load->view('explore/index');
	}
	public function channel()
	{
		$this->load->view('explore/index-channel');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */