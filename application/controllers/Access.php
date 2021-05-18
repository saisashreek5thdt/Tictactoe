<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {
	
	public function index()
	{
		$data['main'] = 'admin/access';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/access');
		$this->load->view('admin/footer1', $data);
	}
	
}