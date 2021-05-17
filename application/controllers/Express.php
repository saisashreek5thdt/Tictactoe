<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Express extends CI_Controller {
	
	public function enquiry()
	{
		$data['main'] = 'web/enquiry';
		$this->load->view('web/header', $data);
		$this->load->view('web/enquiry');
		$this->load->view('web/footer2', $data);
	}
	
	public function testimonial()
	{
		$data['main'] = 'web/testimonial';
		$this->load->view('web/header', $data);
		$this->load->view('web/testimonial');
		$this->load->view('web/footer2', $data);
	}
	
	public function testinfo()
	{
		$data['main'] = 'web/testinfo';
		$this->load->view('web/header', $data);
		$this->load->view('web/testinfo');
		$this->load->view('web/footer2', $data);
	}
	
	public function contactus()
	{
		$data['main'] = 'web/contactus';
		$this->load->view('web/header', $data);
		$this->load->view('web/contactus');
		$this->load->view('web/footer2', $data);
	}
	
	public function branch_view()
	{
		$data['main'] = 'web/branch_view';
		$this->load->view('web/header', $data);
		$this->load->view('web/branch_view');
		$this->load->view('web/footer2', $data);
	}
	
}