<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital_controller extends CI_Controller {
	public function __construct()
     {
          parent::__construct();

          $this->load->helper('date');
          $this->load->model('AdminModel');
          error_reporting(0);
     }
	public function index()
	{
		$this->load->view('admin_index/index');
	}

	public function adminlogin(){
		$this->form_validation->set_rules('userid', 'user id', 'required');
     	$this->form_validation->set_rules('password', 'Password', 'required');
     	if(!$this->form_validation->run()){
     		echo '<script>alert("Not successfull!!")</script>';
     		//echo "Not successfull!!";
     		redirect(base_url());
     		//$this->load->view('admin_index/index');
     	}else{
     		$data = array(
                    'user_id' => $this->input->post('userid'),
                    'password' => $this->input->post('password')
               );
     		$login = $this->AdminModel->Adlogin($data);
     		if($login == false){
     			echo '<script>alert("Your password is not correct")</script>';
     			$this->load->view('admin_index/index');
     			// header('location:'.site_url());
     			// redirect(base_url());
     		}else{
     			$_SESSION['userid'] = $login['userid'];
     			$this->load->view('admin_index/admin_dashboard');
     		}
     	}
	}
}




?>