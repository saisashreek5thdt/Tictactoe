<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        
        $this->load->model("admin_model");
    }

	public function index()
	{
		$data['main'] = 'web/home';
		$this->load->view('web/header', $data);
		$this->load->view('web/home');
		$this->load->view('web/footer', $data);
	}
	
	public function admin()
	{
		$data['main'] = 'admin/admin';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/admin',$data);
		$this->load->view('admin/footer', $data);
	}
	
	public function login_check(){
	
		$ip = $_SERVER['REMOTE_ADDR'];
		$ipcheck = $this->admin_model->ip_checking($ip);
		if ($ipcheck != '') {
		   $email = $this->input->post('email', TRUE);
		   $password = $this->input->post('password', TRUE);
		   $password = $password;
		   //print_r( $password);die;
		   $row = $this->admin_model->admin_login($email, $password);
		  
		   if ($row != "") {
			   $sess_arr = array(
				   'id' => $row->id,
				   'email' => $row->email,
					'name' => $row->name,
					'type' => $row->type,
					'level ' => $row->level,
					'profile_img' => $row->profile_img,
					 'logged_in' => true
			   );
			 // print_r($row->level);die;
			   $this->session->set_userdata($sess_arr);
			   if($row->level === 'admin'){
				$this->session->set_flashdata('msg', 'Welcome');
				redirect('dashboard');
	 
			// access login for seo
				}elseif($row->level === 'seo'){
					$this->session->set_flashdata('msg', 'Welcome ');
			      redirect('dashboard');
				}
		     } else {

				 $this->session->set_flashdata('error', 'Invalid Username Or Password');
			   redirect('admin');
		   }
	   } else {
			 $this->session->set_flashdata('error', 'Access Denied');
		   redirect('admin');
	   }

   
   }
   public function logout(){
	   $this->session->unset_userdata('logged_in');
	   $this->session->set_flashdata('msg', 'Successfully logged out');
	   redirect('admin','refresh');
   }






}