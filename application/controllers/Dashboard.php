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
	
	public function more_leader()
	{
		$data['main'] = 'admin/more_leader';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/more_leader');
		$this->load->view('admin/footer1', $data);
	}
	
	public function leader_view()
	{
		$data['main'] = 'admin/leader_view';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/leader_view');
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
		$data['main'] = 'admin/testmoni_form';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/testmoni_form');
		$this->load->view('admin/footer1', $data);
	}
	
	public function testmoni_create()
	{
		$data['main'] = 'admin/testmoni_create';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/testmoni_create');
		$this->load->view('admin/footer1', $data);
	}
	
	public function testmoni_view()
	{
		$data['main'] = 'admin/testmoni_view';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/testmoni_view');
		$this->load->view('admin/footer1', $data);
	}
	
	public function contact()
	{
		$data['main'] = 'admin/contact';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/contact');
		$this->load->view('admin/footer1', $data);
	}
	
	public function contact_create()
	{
		$data['main'] = 'admin/contact_create';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/contact_create');
		$this->load->view('admin/footer1', $data);
	}
	
	public function contact_view()
	{
		$data['main'] = 'admin/contact_view';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/contact_view');
		$this->load->view('admin/footer1', $data);
	}
	
	/* Express Tab Routes End */
	
	/* Enjoy Tab Routes Start */
	
	public function gallery_img()
	{
		$data['main'] = 'admin/gallery_img';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/gallery_img');
		$this->load->view('admin/footer1', $data);
	}
	
	public function event()
	{
		$data['main'] = 'admin/event';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/event');
		$this->load->view('admin/footer1', $data);
	}
	
	public function event_create()
	{
		$data['main'] = 'admin/event_create';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/event_create');
		$this->load->view('admin/footer1', $data);
	}
	
	public function event_view()
	{
		$data['main'] = 'admin/event_view';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/event_view');
		$this->load->view('admin/footer1', $data);
	}
	
	public function medias()
	{
		$data['main'] = 'admin/medias';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/medias');
		$this->load->view('admin/footer1', $data);
	}
	
	public function medias_create()
	{
		$data['main'] = 'admin/medias_create';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/medias_create');
		$this->load->view('admin/footer1', $data);
	}
	
	public function medias_view()
	{
		$data['main'] = 'admin/medias_view';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/medias_view');
		$this->load->view('admin/footer1', $data);
	}
	
	public function upload_images()
	{
		$data['main'] = 'admin/upload_images';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/upload_images');
		$this->load->view('admin/footer1', $data);
	}
	
	public function social_media()
	{
		$data['main'] = 'admin/social_media';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/social_media');
		$this->load->view('admin/footer1', $data);
	}
	
	/* Enjoy Tab Routes End */
	
}