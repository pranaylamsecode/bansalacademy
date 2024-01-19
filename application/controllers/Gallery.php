<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->model('home_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('gallery/gallery_view');
		$this->load->view('footer_view');
	}
	// public function register()
	// {
	// 	$this->load->view('register');
	// }
}
