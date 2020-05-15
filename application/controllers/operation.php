<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Operation extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('operation_model');
		if(!$this->session->userdata('logged_in'))
		{
			redirect(base_url().'home');
		}
	}

	public function index()
	{
		$data['result'] = $this->operation_model->get_opt();
		$data['opt_display'] = "operation_records";
		$data['load_patient'] = "opt_insert_form";
		$this->load->view('templates/header');
		$this->load->view('main_view',$data);
		$this->load->view('templates/footer');
	}

	public function load_patient($opd_id)
	{
		$this->load->model('opd_model');
		$data['opd_single'] = $this->opd_model->single_record($opd_id);
		$data['result'] = $this->operation_model->get_opt();
		$data['opt_display'] = "operation_records";
		$data['load_patient'] = "opt_insert_form";
		$this->load->view('templates/header');
		$this->load->view('main_view',$data);
		$this->load->view('templates/footer');
	}

	public function insert()
	{
		if(NULL !== ($this->input->post('right_eye')))
		{
			$right_eye = $this->input->post('right_eye');
		}else{
			$right_eye = "";
		}

		if(NULL !== ($this->input->post('left_eye')))
		{
			$left_eye = $this->input->post('left_eye');
		}else{
			$left_eye = "";
		}

		$data = [
				"pname" => $this->input->post('pName'),
				"fname" => $this->input->post('fName'),
				"age" => $this->input->post('age'),
				"gender" => $this->input->post('gender'),
				"cnic" => $this->input->post('cnic'),
				"allowed_name" => $this->input->post('allow_name'),
				"relation" => $this->input->post('relation'),
				"right_eye" => $right_eye,
				"left_eye" => $left_eye
		];

		if($this->input->post('update'))
		{
			$id = $this->input->post('opt_id');
			$this->operation_model->update($data,$id);
		}

		if($this->input->post('insert'))
		{
			$this->operation_model->insert($data);
		}
		
		redirect(base_url()."operation");
	}

	public function update($id)
	{
		$data['opd_single'] = $this->operation_model->single_record($id);
		$data['result'] = $this->operation_model->get_opt();
		$data['opt_display'] = "operation_records";
		$data['load_patient'] = "opt_update_form";

		$this->load->view('templates/header');
		$this->load->view('main_view',$data);
		$this->load->view('templates/footer');
	}

	public function delete($id)
	{
		$this->operation_model->delete($id);
		redirect(base_url() . "operation");
	}

	public function report($id)
	{
		$data['result'] = $this->operation_model->single_record($id);
		$this->load->view('layout/operation_report',$data);

	}
}
?>