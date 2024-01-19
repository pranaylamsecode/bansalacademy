<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Home_model extends CI_Model { 
	
	function __construct()
    {
        parent::__construct();
    }
	
    function system_logo(){      

        //uploading file using codeigniter upload library
        $files = $_FILES['banner'];
        $this->load->library('upload');
        $config['upload_path'] = 'uploads/slider/';
        $config['allowed_types'] = '*';
        $_FILES['banner']['name'] = $files['name'];
        $_FILES['banner']['type'] = $files['type'];
        $_FILES['banner']['tmp_name'] = $files['tmp_name'];
        $_FILES['banner']['size'] = $files['size'];
        $this->upload->initialize($config);
        $this->upload->do_upload('banner');

        $page_data['banner'] = $_FILES['banner']['name'];
        $this->db->insert('home_slider', $page_data);

    }
    function deleteSlider($param2) {
        // Get the image file name before deleting the record
        $image_info = $this->db->get_where('home_slider', array('id' => $param2))->row_array();
        $image_file = $image_info['banner'];

        // Delete the record from the database
        $this->db->where('id', $param2);
        $this->db->delete('home_slider');

        // Unlink or delete the associated image file
        $image_path = FCPATH . 'uploads/slider/' . $image_file; // Assuming FCPATH is your base path
        if (file_exists($image_path)) {
            unlink($image_path);
        }
    }

    function result_image(){      

        //uploading file using codeigniter upload library
        $files = $_FILES['result_banner'];
        $this->load->library('upload');
        $config['upload_path'] = 'uploads/results/';
        $config['allowed_types'] = '*';
        $_FILES['result_banner']['name'] = $files['name'];
        $_FILES['result_banner']['type'] = $files['type'];
        $_FILES['result_banner']['tmp_name'] = $files['tmp_name'];
        $_FILES['result_banner']['size'] = $files['size'];
        $this->upload->initialize($config);
        $this->upload->do_upload('result_banner');

        $page_data['result_banner'] = $_FILES['result_banner']['name'];
        $this->db->insert('results', $page_data);

    }
    function deleteResult($param2) {
        // Get the image file name before deleting the record
        $image_info = $this->db->get_where('results', array('id' => $param2))->row_array();
        $image_file = $image_info['result_banner'];

        // Delete the record from the database
        $this->db->where('id', $param2);
        $this->db->delete('results');

        // Unlink or delete the associated image file
        $image_path = FCPATH . 'uploads/results/' . $image_file; // Assuming FCPATH is your base path
        if (file_exists($image_path)) {
            unlink($image_path);
        }
    }

    function createCourse() {

         // Insert data into the "courses" table
         $page_data = array(
            'section' => $this->input->post('section'),
            'title' => $this->input->post('title'),
            'class_id' => $this->input->post('class_id'),
            'batch' => $this->input->post('batch'),
            'target_year' => $this->input->post('target_year'),
        );
        // print_r($page_data);
        // exit;
        // Uploading file using CodeIgniter upload library
        $files = $_FILES['course_img'];
        $this->load->library('upload');
        $config['upload_path'] = 'uploads/courses/';
        $config['allowed_types'] = '*';
        $_FILES['course_img']['name'] = $files['name'];
        $_FILES['course_img']['type'] = $files['type'];
        $_FILES['course_img']['tmp_name'] = $files['tmp_name'];
        $_FILES['course_img']['size'] = $files['size'];
        $this->upload->initialize($config);
        $this->upload->do_upload('course_img');

        $page_data['course_img'] = $_FILES['course_img']['name'];
    
        $this->db->insert('courses', $page_data);
    }

    function deleteCourse($param2) {
        // Get the image file name before deleting the record
        $image_info = $this->db->get_where('courses', array('id' => $param2))->row_array();
        $image_file = $image_info['course_img'];

        // Delete the record from the database
        $this->db->where('id', $param2);
        $this->db->delete('courses');

        // Unlink or delete the associated image file
        $image_path = FCPATH . 'uploads/courses/' . $image_file; // Assuming FCPATH is your base path
        if (file_exists($image_path)) {
            unlink($image_path);
        }
    }

    function createAnnouncement() {

        // Insert data into the "courses" table
        $page_data = array(
           'title' => $this->input->post('title'),
       );
       // print_r($page_data);
       // exit;
       // Uploading file using CodeIgniter upload library
       $files = $_FILES['announcement_img'];
       $this->load->library('upload');
       $config['upload_path'] = 'uploads/announcement/';
       $config['allowed_types'] = '*';
       $_FILES['announcement_img']['name'] = $files['name'];
       $_FILES['announcement_img']['type'] = $files['type'];
       $_FILES['announcement_img']['tmp_name'] = $files['tmp_name'];
       $_FILES['announcement_img']['size'] = $files['size'];
       $this->upload->initialize($config);
       $this->upload->do_upload('announcement_img');

       $page_data['announcement_img'] = $_FILES['announcement_img']['name'];
   
       $this->db->insert('announcement', $page_data);
   }

   function deleteAnnouncement($param2) {
       // Get the image file name before deleting the record
       $image_info = $this->db->get_where('announcement', array('id' => $param2))->row_array();
       $image_file = $image_info['announcement_img'];

       // Delete the record from the database
       $this->db->where('id', $param2);
       $this->db->delete('announcement');

       // Unlink or delete the associated image file
       $image_path = FCPATH . 'uploads/announcement/' . $image_file; // Assuming FCPATH is your base path
       if (file_exists($image_path)) {
           unlink($image_path);
       }
   }

   function createWinners() {

    // Insert data into the "courses" table
    $page_data = array(
       'title' => $this->input->post('title'),
   );
   // print_r($page_data);
   // exit;
   // Uploading file using CodeIgniter upload library
   $files = $_FILES['winners_img'];
   $this->load->library('upload');
   $config['upload_path'] = 'uploads/winners/';
   $config['allowed_types'] = '*';
   $_FILES['winners_img']['name'] = $files['name'];
   $_FILES['winners_img']['type'] = $files['type'];
   $_FILES['winners_img']['tmp_name'] = $files['tmp_name'];
   $_FILES['winners_img']['size'] = $files['size'];
   $this->upload->initialize($config);
   $this->upload->do_upload('winners_img');

   $page_data['winners_img'] = $_FILES['winners_img']['name'];

   $this->db->insert('winners', $page_data);
}

function deleteWinners($param2) {
   // Get the image file name before deleting the record
   $image_info = $this->db->get_where('winners', array('id' => $param2))->row_array();
   $image_file = $image_info['winners_img'];

   // Delete the record from the database
   $this->db->where('id', $param2);
   $this->db->delete('winners');

   // Unlink or delete the associated image file
   $image_path = FCPATH . 'uploads/winners/' . $image_file; // Assuming FCPATH is your base path
   if (file_exists($image_path)) {
       unlink($image_path);
   }
}

function createGallery() {

    // Insert data into the "courses" table
    $page_data = array(
       'title' => $this->input->post('title'),
   );
   // print_r($page_data);
   // exit;
   // Uploading file using CodeIgniter upload library
   $files = $_FILES['gallery_img'];
   $this->load->library('upload');
   $config['upload_path'] = 'uploads/gallery/';
   $config['allowed_types'] = '*';
   $_FILES['gallery_img']['name'] = $files['name'];
   $_FILES['gallery_img']['type'] = $files['type'];
   $_FILES['gallery_img']['tmp_name'] = $files['tmp_name'];
   $_FILES['gallery_img']['size'] = $files['size'];
   $this->upload->initialize($config);
   $this->upload->do_upload('gallery_img');

   $page_data['gallery_img'] = $_FILES['gallery_img']['name'];

   $this->db->insert('gallery', $page_data);
}

function deleteGallery($param2) {
   // Get the image file name before deleting the record
   $image_info = $this->db->get_where('gallery', array('id' => $param2))->row_array();
   $image_file = $image_info['gallery_img'];

   // Delete the record from the database
   $this->db->where('id', $param2);
   $this->db->delete('gallery');

   // Unlink or delete the associated image file
   $image_path = FCPATH . 'uploads/gallery/' . $image_file; // Assuming FCPATH is your base path
   if (file_exists($image_path)) {
       unlink($image_path);
   }
}

function createClassroom() {

    // Insert data into the "courses" table
    $page_data = array(
       'classroom' => $this->input->post('classroom'),
       'subclass' => $this->input->post('subclass'),
       'date' => $this->input->post('date'),
   );
   // print_r($page_data);
   // exit;
   // Uploading file using CodeIgniter upload library
   $files = $_FILES['document'];
   $this->load->library('upload');
   $config['upload_path'] = 'uploads/classroom/';
   $config['allowed_types'] = '*';
   $_FILES['document']['name'] = $files['name'];
   $_FILES['document']['type'] = $files['type'];
   $_FILES['document']['tmp_name'] = $files['tmp_name'];
   $_FILES['document']['size'] = $files['size'];
   $this->upload->initialize($config);
   $this->upload->do_upload('document');

   $page_data['document'] = $_FILES['document']['name'];

   $this->db->insert('classroom', $page_data);
}

function deleteClassroom($param2) {
   // Get the image file name before deleting the record
   $image_info = $this->db->get_where('classroom', array('id' => $param2))->row_array();
   $image_file = $image_info['document'];

   // Delete the record from the database
   $this->db->where('id', $param2);
   $this->db->delete('classroom');

   // Unlink or delete the associated image file
   $image_path = FCPATH . 'uploads/classroom/' . $image_file; // Assuming FCPATH is your base path
   if (file_exists($image_path)) {
       unlink($image_path);
   }
}

function createTestimonial() {

    // Insert data into the "courses" table
    $page_data = array(
       'name' => $this->input->post('name'),
       'description' => $this->input->post('description'),
   );
   // print_r($page_data);
   // exit;
   // Uploading file using CodeIgniter upload library
   $files = $_FILES['scholarship_image'];
   $this->load->library('upload');
   $config['upload_path'] = 'uploads/testimonial/';
   $config['allowed_types'] = '*';
   $_FILES['scholarship_image']['name'] = $files['name'];
   $_FILES['scholarship_image']['type'] = $files['type'];
   $_FILES['scholarship_image']['tmp_name'] = $files['tmp_name'];
   $_FILES['scholarship_image']['size'] = $files['size'];
   $this->upload->initialize($config);
   $this->upload->do_upload('scholarship_image');

   $page_data['scholarship_image'] = $_FILES['scholarship_image']['name'];

   $this->db->insert('testimonial', $page_data);
}

function deleteTestimonial($param2) {
   // Get the image file name before deleting the record
   $image_info = $this->db->get_where('testimonial', array('id' => $param2))->row_array();
   $image_file = $image_info['scholarship_image'];

   // Delete the record from the database
   $this->db->where('id', $param2);
   $this->db->delete('testimonial');

   // Unlink or delete the associated image file
   $image_path = FCPATH . 'uploads/testimonial/' . $image_file; // Assuming FCPATH is your base path
   if (file_exists($image_path)) {
       unlink($image_path);
   }
}
    
}