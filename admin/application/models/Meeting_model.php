<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Meeting_model extends CI_Model { 
	
	function __construct()
    {
        parent::__construct();
    }
	
   // The function below inserts into academic syllabus table //
   function createMeetingLink(){
    $page_data = array(
        'meeting_code'    => substr(md5(rand(0, 1000000)), 0, 7),
        'title'                     => $this->input->post('title'),
        'link'               => $this->input->post('link'),
        'meeting_type'                  => $this->input->post('meeting_type'),
        // 'subject_id'                => $this->input->post('subject_id'),
        'uploader_type'             => $this->session->userdata('login_type'),
        'uploader_id'               => $this->session->userdata('login_user_id'),
        'session'                   => $this->db->get_where('settings', array('type' => 'session'))->row()->description,
        'timestamp'                 => strtotime(date("Y-m-d H:i:s"))
    );
    

//uploading file using codeigniter upload library
//     $files = $_FILES['file_name'];
//     $this->load->library('upload');
//     $config['upload_path'] = 'uploads/syllabus/';
//     $config['allowed_types'] = '*';
//     $_FILES['file_name']['name'] = $files['name'];
//     $_FILES['file_name']['type'] = $files['type'];
//     $_FILES['file_name']['tmp_name'] = $files['tmp_name'];
//     $_FILES['file_name']['size'] = $files['size'];
//     $this->upload->initialize($config);
//     $this->upload->do_upload('file_name');

// $page_data['file_name'] = $_FILES['file_name']['name'];
$this->db->insert('meeting_link', $page_data);
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

function deleteMeetingLink($param2){
    $this->db->where('meeting_code', $param2);
    $this->db->delete('meeting_link');
}
	
	
}

