<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->model('home_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data = array();
		$data['result'] = $this->home_model->list('results');

		$this->load->view('header_view');
		$this->load->view('result/result_view',$data);
		$this->load->view('footer_view');
	}
	
}
