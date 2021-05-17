<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
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
		$this->load->view('admin/admin');
		$this->load->view('admin/footer', $data);
	}
	
}