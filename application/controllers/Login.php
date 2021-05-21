<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model("admin_model");
        $this->load->model("alert");
       
       
        
    }
 
	public function index()
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
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);
            $password = md5($password);
            // print_r( $password);die;
            $row = $this->admin_model->admin_login($username, $password);
           
            if ($row != "") {
                $sess_arr = array(
                    'id' => $row->id,
                    'username' => $row->username,
                     'name' => $row->name,
                     'profile_img' => $row->profile_img,
                      'logged_in' => true
                );
                $this->session->set_flashdata('msg', 'Welcome');
                $this->session->set_userdata($sess_arr);
                redirect('admin/dashboard');
            } else {

                  $this->session->set_flashdata('error', 'Invalid Username Or Password');
                redirect('admin/login');
            }
        } else {
              $this->session->set_flashdata('error', 'Access Denied');
            redirect('admin/login');
        }

	
	}
	public function logout(){
	    $this->session->unset_userdata('logged_in');
        $this->session->set_flashdata('msg', 'Successfully logged out');
        redirect('admin/login','refresh');
    }
    
    public function change_password(){
    
    
    $this->load->view('admin/change_pass');
    }
    
    public function update_pssword(){
    
        $id = $this->session->userdata('id');
         $password = md5($this->input->post('password'));
        $new_password = md5($this->input->post('new_password'));
           $num_rows = $this->admin_model->verify_password_by_user_id($id, $password);
           
        if ($num_rows > 0) {

           $this->admin_model->set_password_by_user_id($id, $new_password);
           $this->alert->pnotify("success","Password Changed Successfully");
            redirect('admin/dashboard');
        } else {
            $this->alert->pnotify("error","Error Occured ","error");
            redirect('admin/login/change_password');
        }
    }
}
