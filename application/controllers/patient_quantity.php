<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class patient_quantity extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in'))
		{
			redirect(base_url().'home');
		}
		
	}
	public function index()
	{
		$this->load->model('opd_model');
		$this->load->model('operation_model');
		
		$data['operation'] = $this->operation_model->get_opt();
		$data['opd'] = $this->opd_model->get_all();

		$this->load->view('templates/header');
		$this->load->view('layout/patient_quantity',$data);
	}
}

?>