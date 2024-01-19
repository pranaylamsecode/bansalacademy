<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('Base_Controller.php');

class Add_Quiz extends Base_Controller {
	//constructor
	function __construct() {
        parent::__construct();
        		$this->load->database();                                //Load Databse Class
                $this->load->library('session');					    //Load library for session
                $this->load->model('academic_model');                   // Load Apllication Model Here
                $this->load->model('meeting_model');                   // Load Apllication Model Here
                $this->load->model('student_model');                    // Load Apllication Model Here
                $this->load->model('exam_question_model');              // Load Apllication Model Here
                $this->load->model('student_payment_model');            // Load Apllication Model Here
                $this->load->model('event_model');                      // Load Apllication Model Here
                $this->load->model('language_model');                      // Load Apllication Model Here
                $this->load->model('admin_model');                      // Load Apllication Model Here
				$this->load->model('user_model');
			}
    
     public function index()
    {
       	if($this->input->server('REQUEST_METHOD') == 'POST') {
			
				$data_ar = array ( 
	        				'quiz_name' => $this->input->post('quiz', true),
	        				'quiz_duration' => $this->input->post('duration', true),
	        				'start_date' => date('Y-m-d', strtotime($this->input->post('q_s_d', true))),
	        				'end_date' => date('Y-m-d', strtotime($this->input->post('q_e_d', true))),
	        			    'is_active' => DEFAULT_ACTIVE_MODE,
	        			    'show_it' => intval($this->input->post('show_quiz', true)),
	        			    'created_date' => date('Y-m-d H:i:s')
	        			   );
	        
	        	if( $this->User_model->insertRecord('quiz_details', $data_ar) ) {
	        		$this->clear_posted_data();
	        		$data['msg'] = $this->config->item('success_save_quiz');
	        	} else
	        		$data['msg'] = $this->config->item('err_save_quiz');
            }	 
	
        $this->load->view('admin/add-quiz', $data);
    }
    
    public function add_question()
    {
        	if($this->input->server('REQUEST_METHOD') == 'POST') {
			
				$data_ar = array ( 
	        				'quiz_id' => $this->input->post('quiz_id', true),
	        				'question' => $this->input->post('question', true),
	        				'option1' => $this->input->post('option_1', true),
	        				'option2' => $this->input->post('option_2', true),
	        				'option3' => $this->input->post('option_3', true),
	        				'option4' => $this->input->post('option_4', true),
	        				'answer' => $this->input->post('answer', true),
	        				'is_active' => DEFAULT_ACTIVE_MODE,
	        				'created_date' => date('Y-m-d H:i:s')
	        			   );
	        
	        	if( $this->User_model->insertRecord('quiz_questions', $data_ar) ) {
	        	    $id = $this->input->post('quiz_id', true);
	        	    $this->db->set('counter', 'counter+1', FALSE);
                    $this->db->where('quiz_id', $id);
                    $this->db->update('quiz_details');
	        		$this->clear_posted_data();
	        		$data['msg'] = $this->config->item('success_save_quiz_question');
	        	} else
	        		$data['msg'] = $this->config->item('err_save_quiz_question');
            }	 
        $is = DEFAULT_ACTIVE_MODE;
        $query = "select quiz_name, quiz_id from quiz_details where is_active=$is order by quiz_id desc";
	    $data['quiz_name'] = $this->User_model->selectRecord($query);
        $this->load->view('admin/add-quiz-question', $data);
    }
    
   function show_quiz($param1 = null, $param2 = null, $param3 = null)
   {
		$page_data['page_name']     = 'manage_quiz_question';
        $page_data['page_title']    = get_phrase('Manage Quiz Question');
		// $is = DEFAULT_ACTIVE_MODE;
		// $query = "select * from quiz_details where is_active=$is order by quiz_id desc";
		
		$page_data['quiz_details']  = $this->db->get('quiz_details')->result_array();
		
		$this->load->view('backend/index', $page_data);

	//    $page_data['page_name']     = 'manage_quiz_question';
    //         $page_data['page_title']    = get_phrase('Manage Quiz Question');
    //         $page_data['quiz_details']  = $this->db->get('quiz_details')->result_array();
    //         $this->load->view('backend/index', $page_data);
	   
   }
   public function show_quiz_question()
   {
       
       $show_ques = "select quiz_questions.question, quiz_questions.id, quiz_questions.option1, quiz_questions.option2, quiz_questions.option3, quiz_questions.option4, quiz_questions.answer, quiz_details.quiz_name from quiz_questions inner join quiz_details on quiz_details.quiz_id=quiz_questions.quiz_id where quiz_questions.is_active= ".DEFAULT_ACTIVE_MODE." order by quiz_questions.quiz_id desc";
	   $data['quiz_question'] = $this->User_model->selectRecord($show_ques);
       $this->load->view('admin/show-quizquestion', $data);
       
   }
   
}