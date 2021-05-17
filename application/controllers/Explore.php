<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Explore extends CI_Controller {
	
	public function index()
	{
		$data['main'] = 'web/team';
		$this->load->view('web/header', $data);
		$this->load->view('web/team');
		$this->load->view('web/footer', $data);
	}
	
	public function team()
	{
		$data['main'] = 'web/team';
		$this->load->view('web/header', $data);
		$this->load->view('web/team');
		$this->load->view('web/footer', $data);
	}
	
	public function teaminfo()
	{
		$data['main'] = 'web/teaminfo';
		$this->load->view('web/header', $data);
		$this->load->view('web/teaminfo');
		$this->load->view('web/footer', $data);
	}
	
	public function program()
	{
		$data['main'] = 'web/program';
		$this->load->view('web/header', $data);
		$this->load->view('web/program');
		$this->load->view('web/footer', $data);
	}
	
	public function fees()
	{
		$data['main'] = 'web/fees';
		$this->load->view('web/header', $data);
		$this->load->view('web/fees');
		$this->load->view('web/footer', $data);
	}
	
}