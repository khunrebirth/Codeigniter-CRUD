<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();

		$this->load->model('employee_model');
	}

	public function index()
	{
		$data['employee'] = $this->employee_model->read();
		
		$this->load->view('employee/home', $data);
	}

	public function view($id)
	{
		$data['employee'] = $this->employee_model->read_by($id);
		$this->load->view('employee/view', $data);
	}

	public function add_form()
	{
		$this->load->view('employee/add_form');
	}

	public function add_do()
	{
		$txt_code 		= $this->input->post('txt_code');
		$txt_firstname	= $this->input->post('txt_firstname');
		$txt_lastname	= $this->input->post('txt_lastname');
		$txt_position	= $this->input->post('txt_position');
		$txt_department	= $this->input->post('txt_department');

		$data = array(
			'code'		=> $txt_code,
			'firstname'	=> $txt_firstname,
			'lastname'	=> $txt_lastname,
			'position'	=> $txt_position,
			'department'=> $txt_department
		);

		$this->employee_model->create($data);

		redirect('employee','refresh');
 	}

 	public function update_form($id)
 	{
 		$data['employee'] = $this->employee_model->read_by($id);

 		$this->load->view('employee/update_form', $data);
 	}

 	public function update_do()
 	{
 		$txt_id			= $this->input->post('txt_id');
 		$txt_code 		= $this->input->post('txt_code');
		$txt_firstname	= $this->input->post('txt_firstname');
		$txt_lastname	= $this->input->post('txt_lastname');
		$txt_position	= $this->input->post('txt_position');
		$txt_department	= $this->input->post('txt_department');

		$data = array(
			'code'		=> $txt_code,
			'firstname'	=> $txt_firstname,
			'lastname'	=> $txt_lastname,
			'position'	=> $txt_position,
			'department'=> $txt_department
		);

		$this->employee_model->update_by($txt_id, $data);

		redirect('employee','refresh');	
 	}

 	public function delete_form($id) 
 	{
 		$data['employee'] = $this->employee_model->read_by($id);

 		$this->load->view('employee/delete_form', $data);
 	}

 	public function delete_do($id)
 	{
 		$this->session->set_flashdata('message', 'Deleted');

 		$this->employee_model->delete_by($id);

 		redirect('employee');
 	}
}

