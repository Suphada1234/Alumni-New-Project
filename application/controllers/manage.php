<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
            
            //$this->load->library('session');
            $this->load->model('Manage_model');
         
    }
    public function index(){
        

    }
    public function reg_alumni(){
        $config['upload_path']   = './upload/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
		$config['allowed_types'] = 'gif|jpg|png'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
		//$config['max_size']      = 100; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
		//$config['max_width']     = 1024; //ขนาดความกว้างสูงสุด (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
		//$config['max_height']    = 768;  //ขนาดความสูงสูงสดุ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
		$config['encrypt_name']  = true; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน
		$this->load->library('upload', $config);
		$this->upload->do_upload('upload');

        $name = $this->input->post("prefix")." ".$this->input->post("fname")." ".$this->input->post("lname");
        $address = $this->input->post("p_number")." ".$this->input->post("p_road")." ".$this->input->post("p_district")." ".$this->input->post("p_amphoe")." ".$this->input->post("p_province")." ".$this->input->post("p_zipcode");
        $datapersonal = array(
            'card_id' => $this->input->post("card_id"),
            'student_id' => $this->input->post("student_id"),
            'password' => $this->input->post("password"),
            'name' => $name,
            'gender' => $this->input->post("gender"),
            'birthday' => $this->input->post("birthday"),
            'address' => $address,
            'tel' => $this->input->post("p_tel"),
            'email' => $this->input->post("email"),
            'facebook' => $this->input->post("facebook"),
            'password' => $this->input->post("password"),
            'img' => $this->upload->data("file_name")


        );

        $dataalumni = array(
            'student_id' => $this->input->post("student_id"),
            'group' => $this->input->post("group"),
            'branch' => $this->input->post("branch"),
            'faculty' => $this->input->post("faculty"),
            'semester' => $this->input->post("semester"),
            'education_level' => $this->input->post("education_level"),
            'year_int' => $this->input->post("year_int"),
            'year_out' => $this->input->post("year_out"),
            'outstanding_work' => $this->input->post("outstanding_work")
        );

        $address2 = $this->input->post("c_number")." ".$this->input->post("c_road")." ".$this->input->post("c_district")." ".$this->input->post("c_amphoe")." ".$this->input->post("c_zipcode");
        $dataworkinformation = array(
            'student_id' => $this->input->post("student_id"),
            'company' => $this->input->post("company"),
            'position' => $this->input->post("position"),
            'address' => $address2,
            'province' => $this->input->post("c_province"),
            'tel' => $this->input->post("c_tel")

        );

        //print_r($datapersonal);

        $this->Manage_model->personal_insert($datapersonal);
        $this->Manage_model->alumni_insert($dataalumni);
        $this->Manage_model->workinformation_insert($dataworkinformation);


        redirect('welcome/index', 'refresh');

    }
    public function view_reg()
    {

        $data['datapersonal'] = $this->Manage_model->personal_view();
        $this->load->view('view_reg', $data);
    }

    public function info_list()
    {
        $id = $this->input->post('id');
		$result['datapersonal'] = $this->Manage_model->info_list_m($id);
		$this->load->view('view_reg',$result);
    }
     public function info_list_login()
    {
        $id = $this->input->post('id');
		$result['datapersonal'] = $this->Manage_model->info_list_m($id);
		$this->load->view('view_list_login',$result);
    }
    
    public function login()

    {

            $studentid = $this->input->post('login_studentid');
            $password = $this->input->post('login_password');
            $query = $this->Manage_model->login($studentid,$password);

           /* $this->db->select('*');
            $this->db->from('personal');
            $this->db->where(array('student_id' => $studentid, 'password' => $password));            
            $query = $this->db->get();*/

            $user = $query->row();
    
            if ($user->student_id ) {
                $this->session->set_flashdata("success", "เข้าสู่ระบบสำเร็จ");
    
                $_SESSION['student_id'] = $user->student_id;
                $_SESSION['name'] = $user->name;
                $_SESSION['password'] = $user->password;


    
                redirect("welcome/homelogin", "refresh");
            } else {
                $this->session->set_flashdata("error", "ไม่มีชื่อศิษย์เก่านี้ โปรดลงทะเบียน");
                echo '<script> alert("รหัสนักศึกษาหรือรหัสผ่านไม่ถูกต้อง กรุณาตรวจสอบอีกครั้ง") </script>';
                redirect("welcome/login", "refresh");
            }

        }
    
        public function logout()
        {
            $this->session->sess_destroy();
            redirect('welcome/index', 'refresh');
        }

        public function edit()
        {
            
            $config['upload_path']   = './upload/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
            $config['allowed_types'] = 'gif|jpg|png'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
            //$config['max_size']      = 100; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
            //$config['max_width']     = 1024; //ขนาดความกว้างสูงสุด (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
            //$config['max_height']    = 768;  //ขนาดความสูงสูงสดุ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
            $config['encrypt_name']  = true; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน
            $this->load->library('upload', $config);
            $this->upload->do_upload('upload');

        $datapersonal = array(
            'card_id' => $this->input->post("card_id"),
            'student_id' => $this->input->post("student_id"),
            'name'=> $this->input->post("fname"),
            'gender' => $this->input->post("gender"),
            'birthday' => $this->input->post("birthday"),
            'address' => $this->input->post("address"),
            'tel' => $this->input->post("p_tel"),
            'email' => $this->input->post("email"),
            'facebook' => $this->input->post("facebook"),
            'password' => $this->input->post("password"),
            'img' => $this->upload->data("file_name")   
        );

        $dataalumni = array(
            'student_id' => $this->input->post("student_id"),
            'group' => $this->input->post("group"),
            'branch' => $this->input->post("branch"),
            'faculty' => $this->input->post("faculty"),
            'semester' => $this->input->post("semester"),
            'education_level' => $this->input->post("education_level"),
            'year_int' => $this->input->post("year_int"),
            'year_out' => $this->input->post("year_out"),
            'outstanding_work' => $this->input->post("outstanding_work")
        );
    
        $dataworkinformation = array(
            'student_id' => $this->input->post("student_id"),
            'company' => $this->input->post("company"),
            'position' => $this->input->post("position"),
            'address'=> $this->input->post("c_address"),
            'province' => $this->input->post("c_province"),
            'tel' => $this->input->post("c_tel")

        );

        //print_r($datapersonal);
        //print_r($dataalumni);
        //print_r($dataworkinformation);

        $id= $this->input->post("student_id");
        $this->Manage_model->update_personal($datapersonal,$id);
        //print_r($this->Manage_model->update_personal($datapersonal,$id));
		$this->Manage_model->update_alumni($dataalumni,$id);
		$this->Manage_model->update_work($dataworkinformation,$id);
		redirect('Welcome/homelogin');
        }
   
    
           
}

