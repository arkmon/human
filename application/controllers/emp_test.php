<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class emp_test extends CI_Controller {
	 public function __construct()
    {
            parent::__construct();
            $this->load->model('student');
        }
	public function GetAll()
	{
		
			$names = $this->student->getUsers();
			//$user = $this->user_model->finduser($name);
           // $data['user'] = $user;
			$data['name'] = $names ;
            $this->load->view('view_test', $data);

	}

}
