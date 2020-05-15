<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opd extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('opd_model');

		if(!$this->session->userdata('logged_in'))
		{
			redirect(base_url().'home');
		}
	}
	public function index()
	{
	
		$gender = $this->session->userdata('gender');
		$data['gender'] = $gender;
		$data['result'] = $this->opd_model->get_opd_records($gender);
		$data['opd_insert'] = "opd_insert_form";
		$this->load->view('templates/header');
		$this->load->view('main_view',$data);
		$this->load->view('templates/footer');
	}

	public function insert()
	{
		$data = [
		'pname' 	=> $this->input->post('pName'),
		'fname'		=> $this->input->post('fName'),
		'caste' 	=> $this->input->post('caste'),
		'age' 		=> $this->input->post('age'),
		'gender' 	=> $this->input->post('gender'),
		'cnic' 		=> $this->input->post('cnic'),
		'city' 		=> $this->input->post('city'),
		'contact' 	=> $this->input->post('contact')
		//'date' => $this->input->post('date');
		];
		if($this->input->post('update')){
			$id = $this->input->post('id');
			$this->opd_model->update($data,$id);
			
		}

		if($this->input->post('insert')){
			$this->opd_model->insert($data);	
			
		}
		redirect(base_url() . "opd/index");
		
	}

	public function delete($id)
	{
		$this->opd_model->delete($id);
		redirect(base_url() . "opd/");
	}

	public function update($id)
	{
		$data['single_record'] = $this->opd_model->single_record($id);
		//Testing for gender
		// $result = $this->opd_model->gender();
		// $gender = $result->gender;

		$data['gender'] = $this->session->userdata('gender');

		$data['result'] = $this->opd_model->get_opd_records($data['gender']);
		$this->load->view('templates/header');
		$this->load->view('main_view',$data);
		$this->load->view('templates/footer');

	}

	public function report($id)
	{
		$data['result'] = $this->opd_model->single_record($id);
		
		$this->load->view('layout/opd_report',$data);
	}

	public function gender_setup(){
		$data['gender'] = $this->session->userdata('gender');
		$this->load->view('templates/header');
		$this->load->view('layout/gender_setup',$data);
	}

	public function gender_setting()
	{
		$gender = $this->input->post('gender');
		$this->session->set_userdata('gender',$gender);
		redirect(base_url()."opd");
	}

	public function ajaxx(){
		echo $id = $this->input->post('rec_id');
		$this->load->view('layout/opd_report');
	}
}

?>