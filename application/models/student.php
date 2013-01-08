<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Student extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
   
        public function getUsers($firstname,$lastname,$department,$jobtitle) {
        $this->db->where('first_name',$first_name);
        $this->db->from('employees');
        $this->db->join('titles');
        $this->db->join('dept_emp');
        $this->db->join('departments');
        $res = $this->db->get();
        $result= $res->result_array();
        return $result;
  }
        
}


