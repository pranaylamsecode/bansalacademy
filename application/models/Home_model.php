<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{
    
    public function insert($data = array(),$tableName="") {
        // $data['created'] = date("Y-m-d H:i:s");
        // $data['modified'] = date("Y-m-d H:i:s");
        $insert = $this->db->insert($tableName, $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
    function getRowKey_members($id){
		$this->db->where('id',$id);
		$row = $this->db->get('web_testimonial')->row_array();
		return $row;
	}

    function createKey_members($formArray)
	{
      $this->db->insert('web_testimonial',$formArray);
      return $id = $this->db->insert_id();
	}

    function getRows($id = "",$tableName=""){
        if(!empty($id)){
            $query = $this->db->get_where($tableName, array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get_where($tableName, array());
            return $query->result_array();
        }
    }
    
    
    function getRows2($tableName="", $limit=''){
        $this->db->select('*');
        $this->db->from($tableName);
        $this->db->order_by('created', 'DESC');
        $this->db->limit($limit);
        $query = $this->db->get();

            // $this->db->select('*');
            // $this->db->order_by('created', 'desc');
            // $this->db->limit($limit);
            // $query = $this->db->get($tableName);
            // $query = $this->db->get_where($tableName, array('id' => $id));
            return $query->result_array();
    
    }

    function getServiceRows($service = "",$tableName=""){
        if(!empty($service)){
            $query = $this->db->get_where($tableName, array('list_name' => $service));
            return $query->row_array();
        }else{
            $query = $this->db->get_where($tableName, array());
            return $query->result_array();
        }
    }

    function getEventRows($service = "",$tableName=""){
        // $query = $this->db->get_where($tableName, array('year' => $service));
        // print_r($query->result_array());
        // print_r($tableName);
        // exit;
        if(!empty($service)){
            $query = $this->db->get_where($tableName, array('year' => $service));
            return $query->result_array();
        }else{
            $query = $this->db->get($tableName);
            return $query->result_array();
        }
    }
    
    function getDirectorRows($service = "",$tableName=""){
        if(!empty($service)){
            $query = $this->db->get_where($tableName, array('title' => $service));
            return $query->result_array();
        }else{
            $query = $this->db->get($tableName);
            return $query->result_array();
        }
    }

    function getInfraRows($service = "",$tableName=""){
        if(!empty($service)){
            $query = $this->db->get_where($tableName, array('title' => $service));
            return $query->result_array();
        }else{
            $query = $this->db->get($tableName);
            return $query->result_array();
        }
    }

    function getActivityRows($service = "",$tableName=""){
        if(!empty($service)){
            $query = $this->db->get_where($tableName, array('title' => $service));
            return $query->result_array();
        }else{
            $query = $this->db->get($tableName);
            return $query->result_array();
        }
    }
    function getOtherRows($service = "",$tableName=""){
        if(!empty($service)){
            $query = $this->db->get_where($tableName, array('title' => $service));
            return $query->result_array();
        }else{
            $query = $this->db->get($tableName);
            return $query->result_array();
        }
    }
    
    function getRows1($title = "",$tableName=""){
        if(!empty($title)){
            $query = $this->db->get_where($tableName, array('title' => $title));  
            return $query->row_array();
        }
    }
    
    public function list($tableName=""){
        // $query = $this->db->order_by('id', 'DESC')->get_where($tableName, array('status' => 1));
       
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get($tableName);
       return $query->result();
    }
    
    // public function list($tableName=""){
    //     $query = $this->db->get_where($tableName, array('status' => 1));
    //     // $query = $this->db->order_by('created', 'DESC');
    //     return $query->result();
    // }
    
    public function list1($tableName=""){
        //  $this->db->where('status', 1);
         $this->db->order_by('class_id', 'DESC');
         $query = $this->db->get($tableName);
        return $query->result();
    }
   
    public function list2($tableName=""){
        //  $this->db->where('status', 1);
         $this->db->order_by('id', 'DESC');
         $query = $this->db->get($tableName);
        return $query->result();
    }
    
    public function homelist($tableName=""){
        $query = $this->db->order_by('id', 'DESC')->get_where($tableName, array('home_status' => 1));
        return $query->result();
    }
    
    
    public function listByTitle($title ="",$tableName=""){
        
        $query = $this->db->get_where($tableName, array('status' => 1,'title' => $title));
    
        return $query->result();
    }
    
    public function update($data=array(), $id="", $tableName="") {
        $data['modified'] = date("Y-m-d H:i:s");
        if(!empty($data) && !empty($id)){
            $update = $this->db->update($tableName, $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
    
    function getBlogRows($service = "",$tableName=""){
        if(!empty($service)){
            $query = $this->db->get_where($tableName, array('title' => $service));
            return $query->result_array();
        }else{
            $query = $this->db->get($tableName);
            return $query->result_array();
        }
    }

    function getUpcomingRows($service = "",$tableName=""){
        if(!empty($service)){
            $query = $this->db->order_by('id', 'DESC')->get_where($tableName, array('title' => $service));
            return $query->result_array();
        }else{
            $query = $this->db->get($tableName);
            return $query->result_array();
        }
    }

    public function delete($id="",$tableName=""){
        $delete = $this->db->delete($tableName,array('id'=>$id));
        return $delete?true:false;
    }

    public function getDatesForTitle($selectedTitle) {
        $this->db->select('date');
        $this->db->where('title', $selectedTitle);
        $query = $this->db->get('upcoming_tours');
        return $query->result_array();
    }

    
}

