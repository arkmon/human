<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Find extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('student');
    }
 
    function index()
    {
        $this->load->view('search'); // this generates the lookup form
    }
 
    function findemp()
    {
        $firstname =$this->input->get('firstname');
       $lastname =$this->input->get('lastname');
       $department =$this->input->get('dept');
       $jobtitle =$this->input->get('jobtitle');
       
       $firstname = $this->employee_model->getsearch($firstname,$lastname,$department,$jobtitle);
       $this->load->view('user_details', $firstname);
      // echo json_encode($firstname);    
   }
}