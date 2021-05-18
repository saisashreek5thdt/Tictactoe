<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends CI_Controller {
	
	public function seo_pages()
	{
		$data['main'] = 'admin/seo_pages';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/seo_pages');
		$this->load->view('admin/footer1', $data);
	}
	
	public function seo_meta()
	{
		$data['main'] = 'admin/seo_meta';
		$this->load->view('admin/header1', $data);
		$this->load->view('admin/seo_meta');
		$this->load->view('admin/footer1', $data);
	}
	
}