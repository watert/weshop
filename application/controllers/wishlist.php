<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wishlist extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper("url");
	}
	public function index()
	{
		$this->load->view('wishlist/index');
	}
	public function detail(){
		$this->load->view('wishlist/detail');
	}
	public function profile(){
		$this->load->view('wishlist/profile');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */