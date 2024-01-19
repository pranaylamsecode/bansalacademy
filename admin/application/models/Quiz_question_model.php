<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Quiz_question_model extends CI_Model { 
	
	function __construct()
    {
        parent::__construct();
    }
	
    function createQuestion(){
        $page_data = array(
            'quiz_id' => $this->input->post('quiz_id'),
            'question' => $this->input->post('question'),
            'option1' => $this->input->post('option1'),
            'option2' => $this->input->post('option2'),
            'option3' => $this->input->post('option3'),
            'option4' => $this->input->post('option4'),
            'answer' => $this->input->post('answer'),
            'is_active' => '1',
        );

        // print_r($page_data);
        // exit;

        $this->db->insert('quiz_questions', $page_data);
         // Increment the 'counter' field in quiz_details table
     $id = $this->input->post('quiz_id');
     $this->db->set('counter', 'counter+1', FALSE);
     $this->db->where('quiz_id', $id);
     $this->db->update('quiz_details');
    }

   // The function below inserts into academic syllabus table //
    function updateQuestion($param2){
 
        $page_data = array(
            // 'quiz_id' => $this->input->post('quiz_id'),
            'question' => $this->input->post('question'),
            'option1' => $this->input->post('option1'),
            'option2' => $this->input->post('option2'),
            'option3' => $this->input->post('option3'),
            'option4' => $this->input->post('option4'),
            'answer' => $this->input->post('answer'),
        );

        // print_r($page_data);
        // exit;
        $this->db->where('id', $param2);
        $this->db->update('quiz_questions', $page_data);
    }

    function deleteQuizQuestion($param2){
        // Get the quiz_id of the question being deleted
        $question = $this->db->get_where('quiz_questions', array('id' => $param2))->row();
        $quiz_id = $question->quiz_id;
    
        // Delete the question from quiz_questions table
        $this->db->where('id', $param2);
        $this->db->delete('quiz_questions');
    
        // Update the counter field in quiz_details table
        $this->db->where('quiz_id', $quiz_id);
        $this->db->set('counter', 'counter-1', FALSE);
        $this->db->update('quiz_details');
    }

}