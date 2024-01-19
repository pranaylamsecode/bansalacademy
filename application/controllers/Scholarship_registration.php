<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scholarship_registration extends CI_Controller {

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
		$data = array();
		$data['classes'] = $this->home_model->list1('class');

		// print_r($data['classes']);
		// exit;

		$this->load->view('header_view');
		$this->load->view('scholarship/scholarship_registration_view',$data);
		$this->load->view('footer_view');
	}
	

	public function store()
    {
        $data = $imgData = $imgDatap = array(); 
        $error = $id = $prevImage = ''; 
		$data['classes'] = $this->home_model->list1('class');
        // If add request is submitted 
        if($this->input->post()){ 
            // Form field validation rules 
            $this->form_validation->set_error_delimiters('<span class=error>','</span>');
            $this->form_validation->set_rules('fullName', 'fullName', 'required');
			$this->form_validation->set_rules('gender', 'gender', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('mobileNumber', 'mobileNumber', 'required');
			$this->form_validation->set_rules('class', 'class', 'required');

			$fullName = $this->input->post('fullName');
			$gender = $this->input->post('gender');
			$email = $this->input->post('email');
			$mobileNumber = $this->input->post('mobileNumber');
			$class = $this->input->post('class');
            
            $imgData = array( 
				'fullName' => $fullName,
				'gender' => $gender,
				'email' => $email,
				'mobileNumber' => $mobileNumber,
				'class' => $class,
				'user_role' => 2,
            );
			// print_r($imgData);
			// exit;
			if($this->form_validation->run() == true){ 
				if(empty($error)){ 
					// Insert image data 
					$insert = $this->home_model->insert($imgData,'quiz_enquiry'); 
						
					if($insert){ 
						$this->session->set_userdata(array(
							'user_id' => $insert, // Assuming user_id is returned after insertion
							'first_name' => $fullName,
							'user_name' => $email,
							'user_role' => 2,
						));
						redirect('quiz');
						// echo '<script>alert("Thank You...! Successfully Data Submitted.");window.location = "'.base_url().'StartQuiz";</script>';
					}else{ 
						$error = 'Some problems occurred, please try again.'; 
					}
				}
				$data['error_msg'] = $error; 
			}
		
        }
        $data['image'] = $imgData; 
        $data['title'] = 'Upload Image'; 
        $data['action'] = 'Upload';
        
        $this->load->view('header_view');
		$this->load->view('scholarship/scholarship_registration_view',$data);
		$this->load->view('footer_view');

    }


}
