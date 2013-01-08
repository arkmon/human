<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Student extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
   
        public function getUsers($firstname,$lastname,$department,$jobtitle) {
            if ($lastname!=''){  $this->db->where('last_name',$lastname);}
         if ($department!=''){  $this->db->where('dept_name',$department);}
          if ($jobtitle!=''){  $this->db->where('title',$jobtitle);}
        $this->db->where('first_name',$firstname);
        $this->db->from('employees',10,20);
       $this->db->join('titles', 'titles.emp_no = employees.emp_no');
      $this->db->join('dept_emp', 'dept_emp.emp_no = employees.emp_no');
      $this->db->join('departments', 'departments.dept_no = dept_emp.dept_no');
       
       $res = $this->db->get();
        $result= $res->result_array();
         $data1['count'] = count($result);
        $data1['results'] = $result;
        return $result;
  }
        
}


