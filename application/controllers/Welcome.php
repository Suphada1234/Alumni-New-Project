<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Manage_model');
    }

	public function index(){
		$data['datapersonal'] = $this->Manage_model->personal_view();
        $this->load->view('home',$data);
	}

	public function reg_alumni(){
		$this->load->view('reg_alumni');
		
	}

	public function view_reg(){
		$data['datapersonal'] = $this->Manage_model->personal_view(); 
		$this->load->view('view_reg',$data);	
	}

	public function info_list()
	{
        $id = $this->input->post('id');
		$data['datapersonal'] = $this->Manage_model->info_list_m($id);
		$this->load->view('view_reg',$data);
	}
}
