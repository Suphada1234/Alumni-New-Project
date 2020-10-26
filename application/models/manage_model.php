<?php defined('BASEPATH') or exit('No direct script access allowed');
class Manage_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function personal_insert($datapersonal)
	{
		$this->db->insert('personal', $datapersonal);
	}

	function alumni_insert($dataalumni)
	{
		$this->db->insert('alumni', $dataalumni);
	}

	function workinformation_insert($dataworkinformation)
	{
		$this->db->insert('workinformation', $dataworkinformation);
	}

	function personal_view()
	{
		$this->db->select('*');
		$this->db->from('personal');
		$this->db->join('alumni', 'alumni.student_id = personal.student_id');
		$this->db->join('workinformation', 'workinformation.student_id = personal.student_id');
		$data = $this->db->get('');
		return $data;
	}

	function info_list_m($id)
	{
		$this->db->select('*');
		$result = $this->db->get_where('personal', array('student_id' => $id));
		return $result->result();
	}

	function login()
	{
		$this->db->select('student_id, password');
		$result = $this->db->get('user');
		return $result;
	}

	function editAlumni($datapersonal,$dataalumni,$dataworkinformation)
	{
		$id =  $_SESSION["student_id"];
		$this->db->where('student_id', $id);
		$this->db->update('personal', $datapersonal);
		$this->db->update('alumni', $dataalumni);
		$this->db->update('workinformation', $dataworkinformation;
	}

	
}
