<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		$data['main'] = 'admin/dashboard';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer1', $data);
	}
	
	public function slider()
	{
		$data['main'] = 'admin/slider';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/slider');
		$this->load->view('admin/footer1', $data);
	}
	
	/* Explore Tab Routes Start */
	
	public function approach()
	{
		$data['main'] = 'admin/approach';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/approach');
		$this->load->view('admin/footer1', $data);
	}
	
	public function approachtabs()
	{
		$data['main'] = 'admin/approachtabs';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/approachtabs');
		$this->load->view('admin/footer1', $data);
	}
	
	public function leader()
	{
		$data['main'] = 'admin/leader';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/leader');
		$this->load->view('admin/footer1', $data);
	}
	
	public function our_program()
	{
		$data['main'] = 'admin/program';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/program');
		$this->load->view('admin/footer1', $data);
	}
	
	public function fee_structure()
	{
		$data['main'] = 'admin/fees';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/fees');
		$this->load->view('admin/footer1', $data);
	}
	
	/* Explore Tab Routes End */
	
	/* Express Tab Routes Start */
	
	public function enquiry_form()
	{
		$data['main'] = 'admin/enquiry_form';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/enquiry_form');
		$this->load->view('admin/footer1', $data);
	}
	
	public function testmoni_form()
	{
		$data['main'] = 'admin/enquiry_form';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/testmoni_form');
		$this->load->view('admin/footer1', $data);
	}
	
	public function testmoni_create()
	{
		$data['main'] = 'admin/enquiry_form';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/testmoni_create');
		$this->load->view('admin/footer1', $data);
	}
	
	public function testmoni_view()
	{
		$data['main'] = 'admin/enquiry_form';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/testmoni_view');
		$this->load->view('admin/footer1', $data);
	}
	
	/* Express Tab Routes End */
	
}