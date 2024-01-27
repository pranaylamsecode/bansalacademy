<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class RLecture_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

   // The function below inserts into academic syllabus table //
   function createLectureLink(){
    $page_data = array(
        // 'meeting_code'    => substr(md5(rand(0, 1000000)), 0, 7),
        'title'                     => $this->input->post('title'),
        'youtube_link'               => $this->input->post('youtube_link'),
        'description'                  => $this->input->post('description'),
        // 'subject_id'                => $this->input->post('subject_id'),
        // 'uploader_type'             => $this->session->userdata('login_type'),
        // 'uploader_id'               => $this->session->userdata('login_user_id'),
        // 'session'                   => $this->db->get_where('settings', array('type' => 'session'))->row()->description,
        // 'timestamp'                 => strtotime(date("Y-m-d H:i:s"))
    );

    // print_r($page_data);
    // exit;

$this->db->insert('recorded_lecture', $page_data);
}

 // The function below inserts into academic syllabus table //
 function updateMeetingLink($param2){
    $page_data = array(
        'title'                     => $this->input->post('title'),
        'link'               => $this->input->post('link'),
        // 'class_id'                  => $this->input->post('class_id'),
        // 'subject_id'                => $this->input->post('subject_id'),
        'session'                   => $this->db->get_where('settings', array('type' => 'session'))->row()->description
        );

$this->db->where('id', $param2);
$this->db->insert('meeting_link', $page_data);
}

function deleteLectureLink($param2){
    $this->db->where('id', $param2);
    $this->db->delete('recorded_lecture');
}


}
