<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');		
	}
	public function index()
	{
		$this->load->view('index');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$gender = $this->input->post('role');

		$result = $this->user_model->login($username,$password);
		if($result == false)
		{
			$this->session->set_flashdata('login_failed',"Username or password is incorrect");
			redirect(base_url()."home");
		}else{
			$data = array(
				'username' => $username,
				'gender' => $gender,
				'logged_in' => true
			);
			
			$this->session->set_userdata($data);
			redirect(base_url());
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'home');
	}
}

?>