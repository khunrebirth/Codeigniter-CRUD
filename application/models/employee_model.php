<?php

class Employee_model extends CI_Model {

	public function __construct() 
	{
		parent::__construct();
	}

	/*********************************
	 * Method create
	 *********************************/
	public function create($data)
	{
		$this->db->insert('employee', $data);
	}

	/*********************************
	 * Method read
	 *********************************/
	public function read()
	{
		$query = $this->db->get('employee');
		return $query->result();
	}

	/*********************************
	 * Method read_by
	 *********************************/
	public function read_by($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('employee');

		return $query->row();
	}

	/*********************************
	 * Method read_by
	 *********************************/
	public function update_by($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('employee', $data);
	}

	/*********************************
	 * Method delete_by
	 *********************************/
	public function delete_by($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('employee');
	}

}

?>