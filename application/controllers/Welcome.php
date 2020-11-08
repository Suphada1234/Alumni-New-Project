<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Manage_model');
    }

	public function index(){
		
		$data['query'] =$this->Manage_model->showone2();
		$this->load->view('home',$data);
		$this->load->view('footer');
		
	}

	public function reg_alumni(){
		$this->load->view('reg_alumni');
		$this->load->view('footer');
		
		
	}

	public function view_reg(){
		$data['query'] =$this->Manage_model->showone();
		$this->load->view('view_reg',$data);
		$this->load->view('footer');	
	}

	public function info_list()
	{
        $id = $this->input->post('id');
		$data['query'] =$this->Manage_model->showone($id);
		$this->load->view('view_reg',$data);
		$this->load->view('footer');
	}

	public function login()
	{
		
		$this->load->view('login');
		$this->load->view('footer');
		
	}

	public function homelogin()
	{
		$id = $this->input->post('id');
		$data['query'] =$this->Manage_model->showone2();
		$this->load->view('homelogin',$data);
		$this->load->view('footer');
	}
	public function edit(){
		$id = $this->input->post('id');
		$id = $this->session->userdata('student_id');
		$data['query'] =$this->Manage_model->showone($id);
		//print_r($data);
		$this->load->view('edit',$data);
		$this->load->view('footer');
	}
}
