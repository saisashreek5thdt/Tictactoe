<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enjoy extends CI_Controller {
	
	public function events()
	{
		$data['main'] = 'web/events';
		$this->load->view('web/header', $data);
		$this->load->view('web/events');
		$this->load->view('web/footer2', $data);
	}
	
	public function events_view()
	{
		$data['main'] = 'web/events_view';
		$this->load->view('web/header', $data);
		$this->load->view('web/events_view');
		$this->load->view('web/footer2', $data);
	}
	
	public function media()
	{
		$data['main'] = 'web/media';
		$this->load->view('web/header', $data);
		$this->load->view('web/media');
		$this->load->view('web/footer2', $data);
	}
	
	public function media_view()
	{
		$data['main'] = 'web/media_view';
		$this->load->view('web/header', $data);
		$this->load->view('web/media_view');
		$this->load->view('web/footer2', $data);
	}
	
}