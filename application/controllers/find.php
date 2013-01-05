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
        $dept = $this->input->post('dept');
        $data = $this->student->getById($dept);
        // just for brevity, we'll echo the result here - you should use a view!
        $this->load->view('user_details',$data);
    }
}