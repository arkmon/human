<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Student extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    public function get($args)
    {
        // use array keys as column names for db lookup
        $where = array();
        $valid_column_names = array('first_name','last_name','dept_name','title');
        // use only those $args vals (from URL) that match col names in students table
        foreach ($valid_column_names as $key) {
            if (isset($args[$key])) {
                $where[$key] = $args[$key];
            }
        }
        if (count($where) == 0) { // stop full select on table
            return false;
        }
        $this->db->where($where);
        $result = $this->db->get();
        // return the results as an array - in which each selected row appears as an array
        return $result->result_array();
    }
} 
