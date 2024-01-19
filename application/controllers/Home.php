<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->model('home_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

	
	public function index()
	{
		$data = array();
		$data['slider'] = $this->home_model->list('home_slider');
		$data['winner'] = $this->home_model->list('winners');
		$data['announce'] = $this->home_model->list('announcement');
		$data['testimonial'] = $this->home_model->list('testimonial');
		// print_r($data);
		// exit;

		$this->load->view('header_view');
		$this->load->view('home/home_view',$data);
		$this->load->view('footer_view');
	}
	
}
