<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Quiz extends CI_Controller { 

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
                $this->load->model('quiz_model'); 
                $this->load->model('quiz_question_model'); 
            }

  
    
        /***********  The function manages quiz ***********************/
        function add_quiz ($param1 = null, $param2 = null, $param3 = null){

            if($param1 == 'create'){
                // echo 'hello';
                // print_r($param1);
                // exit;
                $this->quiz_model->createQuiz();
                $this->session->set_flashdata('flash_message', get_phrase('Quiz added successfully'));
                redirect(base_url(). 'quiz/manage_quiz', 'refresh');
            }

            if($param1 == 'update'){
                $this->quiz_model->updateQuiz($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
                redirect(base_url(). 'quiz/manage_quiz', 'refresh');
            }

            if($param1 == 'delete'){
                // print_r($param2);
                // exit;
                $this->quiz_model->deleteQuiz($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
                redirect(base_url(). 'quiz/manage_quiz', 'refresh');
            }
    
            $page_data['page_name']     = 'add_quiz';
            $page_data['page_title']    = get_phrase('Add Quiz');
            $page_data['quiz_details']  = $this->db->get('quiz_details')->result_array();
            $this->load->view('backend/index', $page_data);
    
        }

        function edit_quiz($quiz_id){

            $page_data['quiz_id']      = $quiz_id;
            $page_data['page_name']     = 'edit_quiz';
            $page_data['page_title']    = get_phrase('Edit Quiz');

            // print_r($page_data);
            // exit;
            $this->load->view('backend/index', $page_data);
        }

        function manage_quiz ($param1 = null, $param2 = null, $param3 = null){
    
            $page_data['page_name']     = 'manage_quiz';
            $page_data['page_title']    = get_phrase('Manage Quiz');
            $page_data['quiz_details']  = $this->db->get('quiz_details')->result_array();
            // print_r($page_data);
            // exit;
            $this->load->view('backend/index', $page_data);
    
        }

         /***********  The function below add, update and delete exam question table ***********************/
        function quizQuestion ($param1 = null, $param2 = null, $param3 = null){

            if($param1 == 'create'){
                $this->quiz_question_model->createQuestion();
                $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
                redirect(base_url(). 'quiz/manage_quiz_question', 'refresh');
            }

            if($param1 == 'update'){
                $this->quiz_question_model->updateQuestion($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
                redirect(base_url(). 'quiz/manage_quiz_question', 'refresh');
            }
        
            $page_data['page_name']     = 'add_quiz_question';
            $page_data['page_title']    = get_phrase('Quiz Question');
            $this->load->view('backend/index', $page_data);
        }

        function edit_quiz_question($id){

            $page_data['id']      = $id;
            $page_data['page_name']     = 'edit_quiz_question';
            $page_data['page_title']    = get_phrase('Edit Quiz Question');

            // print_r($page_data);
            // exit;
            $this->load->view('backend/index', $page_data);
        }

        function manage_quiz_question ($param1 = null, $param2 = null, $param3 = null){

            if($param1 == 'create'){
                // echo 'hello';
                // print_r($param3);
                // exit;
                $this->quiz_question_model->createQuestion();
                $this->session->set_flashdata('flash_message', get_phrase('Quiz added successfully'));
                redirect(base_url(). 'quiz/manage_quiz_question', 'refresh');
            }
    
    
            if($param1 == 'delete'){
                // print_r($param2);
                // exit;
                $this->quiz_question_model->deleteQuizQuestion($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
                redirect(base_url(). 'quiz/manage_quiz_question', 'refresh');
            }

            $page_data['page_name'] = 'manage_quiz_question';
            $page_data['page_title'] = get_phrase('Manage Quiz Question');
            
            // Perform an inner join operation on quiz_questions and quiz_details using their common column
            $this->db->select('*');
            $this->db->from('quiz_questions');
            $this->db->join('quiz_details', 'quiz_questions.quiz_id = quiz_details.quiz_id');
            $page_data['details'] = $this->db->get()->result_array();
            
            // print_r($page_data);
            // exit;
            
            $this->load->view('backend/index', $page_data);
    
        }

}