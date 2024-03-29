<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('display_errors', 1);
class Soal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		/* if (!$this->ion_auth->logged_in()){
			redirect('auth');
		}else if ( !$this->ion_auth->is_admin() && !$this->ion_auth->in_group('Lecturer') ){
			show_error('Only Administrators and lecturers are authorized to access this page, <a href="'.base_url('dashboard').'">Back to main menu</a>', 403, 'Forbidden Access');
		} */


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
                $this->load->model('RLecture_model');
                $this->load->model('home_model');
               // $this->load->library('csvimport');

		$this->load->library(['datatables', 'form_validation']);// Load Library Ignited-Datatables
		$this->load->helper('my');// Load Library Ignited-Datatables
		$this->load->model('Master_model', 'master');
		$this->load->model('Soal_model', 'soal');
		$this->form_validation->set_error_delimiters('','');

        /* parent::__construct();
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
        $this->load->model('RLecture_model');
        $this->load->model('home_model');
        $this->load->library('csvimport'); */
	}

	public function output_json($data, $encode = true)
	{
        if($encode) $data = json_encode($data);
        $this->output->set_content_type('application/json')->set_output($data);
    }

    public function index()
	{
/*         $user = $this->ion_auth->user()->row(); */
		$data = [
			/* 'user' => $user, */
			'judul'	=> 'Question',
			'subjudul'=> 'Question Bank'
        ];

        /* if($this->ion_auth->is_admin()){
            //Jika admin maka tampilkan semua matkul
            $data['matkul'] = $this->master->getAllMatkul();
        }else{
            //Jika bukan maka matkul dipilih otomatis sesuai matkul dosen
            $data['matkul'] = $this->soal->getMatkulDosen($user->username);
        } */

		/* $this->load->view('_templates/dashboard/_header.php', $data); */

      /*   $page_data['page_name'] = 'dashboard';
        $page_data['page_title'] = get_phrase('admin_dashboard');
        $this->load->view('backend/index', $page_data); */
        $page_data['check'] = 'new';
        $page_data['page_name'] = 'soal/data';
        $page_data['page_title'] = get_phrase('Question Paper');
        $this->load->view('backend/index', $page_data);


		/* this->load->view('soal/');
		$this->load->view('_templates/dashboard/_footer.php'); */
    }

    public function detail($id)
    {
        $user = $this->ion_auth->user()->row();
		$data = [
			'user'      => $user,
			'judul'	    => 'Question',
            'subjudul'  => 'Edit Question',
            'soal'      => $this->soal->getSoalById($id),
        ];

        $this->load->view('_templates/dashboard/_header.php', $data);
		$this->load->view('soal/detail');
		$this->load->view('_templates/dashboard/_footer.php');
    }

    public function add()
	{
       /*  $user = $this->ion_auth->user()->row(); */
		$page_data = [
			/* 'user'      => $user, */
			'judul'	    => 'Question',
            'subjudul'  => 'Create Questions'
        ];


        $page_data['dosen'] = $this->soal->getAllDosen();
	/* 	$this->load->view('_templates/dashboard/_header.php', $data);
		$this->load->view('soal/add');
		$this->load->view('_templates/dashboard/_footer.php'); */

        $page_data['check'] = 'new';
        $page_data['page_name'] = 'soal/add';
        $page_data['page_title'] = get_phrase('Add Question');
        $this->load->view('backend/index', $page_data);
    }

    public function edit($id)
	{
		$user = $this->ion_auth->user()->row();
		$data = [
			'user'      => $user,
			'judul'	    => 'Question',
            'subjudul'  => 'Edit Question',
            'soal'      => $this->soal->getSoalById($id),
        ];

        if($this->ion_auth->is_admin()){
            //Jika admin maka tampilkan semua matkul
            $data['dosen'] = $this->soal->getAllDosen();
        }else{
            //Jika bukan maka matkul dipilih otomatis sesuai matkul dosen
            $data['dosen'] = $this->soal->getMatkulDosen($user->username);
        }

		$this->load->view('_templates/dashboard/_header.php', $data);
		$this->load->view('soal/edit');
		$this->load->view('_templates/dashboard/_footer.php');
	}

	public function data($id=null, $dosen=null)
	{
		$this->output_json($this->soal->getDataSoal($id, $dosen), false);
    }

    public function validasi()
    {
        /* if($this->ion_auth->is_admin()){
            $this->form_validation->set_rules('dosen_id', 'Lecturer', 'required');
        } */
        // $this->form_validation->set_rules('soal', 'Soal', 'required');
        // $this->form_validation->set_rules('jawaban_a', 'Jawaban A', 'required');
        // $this->form_validation->set_rules('jawaban_b', 'Jawaban B', 'required');
        // $this->form_validation->set_rules('jawaban_c', 'Jawaban C', 'required');
        // $this->form_validation->set_rules('jawaban_d', 'Jawaban D', 'required');
        // $this->form_validation->set_rules('jawaban_e', 'Jawaban E', 'required');
        $this->form_validation->set_rules('jawaban', 'Answer key', 'required');
        $this->form_validation->set_rules('bobot', 'Question Weight', 'required|max_length[2]');
    }

    public function file_config()
    {
        $allowed_type 	= [
            "image/jpeg", "image/jpg", "image/png", "image/gif",
            "audio/mpeg", "audio/mpg", "audio/mpeg3", "audio/mp3", "audio/x-wav", "audio/wave", "audio/wav",
            "video/mp4", "application/octet-stream"
        ];
        $config['upload_path']      = FCPATH.'uploads/bank_soal/';
        $config['allowed_types']    = 'jpeg|jpg|png|gif|mpeg|mpg|mpeg3|mp3|wav|wave|mp4';
        $config['encrypt_name']     = TRUE;

        	 $this->load->library('upload', $config);
		 return $this->upload->initialize($config);
    }

    public function save()
    {

        $method = $this->input->post('method', true);
        $this->validasi();
        $this->file_config();


        if($this->form_validation->run() === FALSE){
            $method==='add'? $this->add() : $this->edit();
        }else{
            $data = [
                'soal'      => $this->input->post('soal', true),
                'jawaban'   => $this->input->post('jawaban', true),
                'bobot'     => $this->input->post('bobot', true),
            ];

            $abjad = ['a', 'b', 'c', 'd', 'e'];

            // Inputan Opsi
            foreach ($abjad as $abj) {
                $data['opsi_'.$abj]    = $this->input->post('jawaban_'.$abj, true);
            }

            $i = 0;
            foreach ($_FILES as $key => $val) {
                $img_src = FCPATH.'uploads/bank_soal/';
                $getsoal = $this->soal->getSoalById($this->input->post('id_soal', true));

                $error = '';
                if($key === 'file_soal'){
                    if(!empty($_FILES['file_soal']['tmp_name'])){
                        if (!$this->upload->do_upload('file_soal')){
                            $error = $this->upload->display_errors();
                            show_error($error, 500, 'File Ques. Error');
                            exit();
                        }else{
                            if($method === 'edit'){
                                if(!unlink($img_src.$getsoal->file)){
                                    show_error('Error when deleting image <br/>'.var_dump($getsoal), 500, 'Image Editing Error');
                                    exit();
                                }
                            }
                            $data['file'] = $this->upload->data('file_name');
                            $data['tipe_file'] = $this->upload->data('file_type');
                        }
                    }
                }else{
                    $file_abj = 'file_'.$abjad[$i];
                    if(!empty($_FILES[$file_abj]['tmp_name'])){

                        if (!$this->upload->do_upload($file_abj)){
                            $error = $this->upload->display_errors();
                            show_error($error, 500, 'Option Files '.strtoupper($abjad[$i]).' Error');
                            exit();
                        }else{
                            if($method === 'edit'){
                                if(!empty($getsoal->$file_abj) &&!unlink($img_src.$getsoal->$file_abj)){
                                    show_error('Error when deleting image', 500, 'Image Editing Error');
                                    exit();
                                }
                            }
                            $data[$file_abj] = $this->upload->data('file_name');
                        }
                    }
                    $i++;
                }
            }

            if(true){
                $pecah = $this->input->post('dosen_id', true);
                $pecah = explode(':', $pecah);
                $data['dosen_id'] = $pecah[0];
                $data['matkul_id'] = end($pecah);
            }else{
                $data['dosen_id'] = $this->input->post('dosen_id', true);
                $data['matkul_id'] = $this->input->post('matkul_id', true);
            }

            if($method==='add'){
                //push array
                $data['created_on'] = time();
                $data['updated_on'] = time();
                //insert data
               $this->master->create('tb_soal', $data);

            }else if($method==='edit'){
                //push array
                $data['updated_on'] = time();
                //update data
                $id_soal = $this->input->post('id_soal', true);
                $this->master->update('tb_soal', $data, 'id_soal', $id_soal);
                redirect('soal/detail/'.$id_soal);
            }else{
                show_error('Method unknown', 404);
            }
            redirect('soal');
        }
    }

    public function delete()
    {
        $chk = $this->input->post('checked', true);

        // Delete File
        foreach($chk as $id){
            $abjad = ['a', 'b', 'c', 'd', 'e'];
            $path = FCPATH.'uploads/bank_soal/';
            $soal = $this->soal->getSoalById($id);
            // Hapus File Soal
            if(!empty($soal->file)){
                if(file_exists($path.$soal->file)){
                    unlink($path.$soal->file);
                }
            }
            //Hapus File Opsi
            $i = 0; //index
            foreach ($abjad as $abj) {
                $file_opsi = 'file_'.$abj;
                if(!empty($soal->$file_opsi)){
                    if(file_exists($path.$soal->$file_opsi)){
                        unlink($path.$soal->$file_opsi);
                    }
                }
            }
        }

        if(!$chk){
            $this->output_json(['status'=>false]);
        }else{
            if($this->master->delete('tb_soal', $chk, 'id_soal')){
                $this->output_json(['status'=>true, 'total'=>count($chk)]);
            }
        }
    }
}
