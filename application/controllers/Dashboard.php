<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
        $this->load->model("admin_model");
    }
	public function index()
	{
		if($this->session->userdata('type')==='1'){
			$data['main'] = 'admin/dashboard';
			$this->load->view('admin/header1', $data);
			$this->load->view('admin/dashboard');
			$this->load->view('admin/footer1', $data);
		}else{
			echo "Access Denied";
		}
	}
	public function seo()
	{
		if($this->session->userdata('type')==='2'){
			$data['main'] = 'admin/dashboard';
			$this->load->view('admin/header1', $data);
			$this->load->view('admin/dashboard');
			$this->load->view('admin/footer1', $data);
		}else{
			echo "Access Denied";
		}
	}
	public function slider()
	{
		$data['slider']  = $this->admin_model->get_slider();
		$data['main'] = 'admin/slider';
		$this->load->view('admin/header1');
		$this->load->view('admin/slider',$data);
		$this->load->view('admin/footer1');
	}
	
	public function  add(){

		if($_FILES['slider_image']['name'] != ""){
			$config1['upload_path'] = 'uploads/sliders/';
			$config1['allowed_types'] = '*';
			$config1['file_name'] = $_FILES['slider_image']['name'];				 

			$this->load->library('upload',$config1);
			$this->upload->initialize($config1);

			if($this->upload->do_upload('slider_image')){
				$uploadData = $this->upload->data();
				$slider_image = 'uploads/sliders/'.$uploadData['file_name'];
			
					// /unlink($this->input->post("old_slider_image"));
						
				}
				}else{
					$slider_image = $this->input->post("old_slider_image");
		}
		//print_r($slider_image);die();
		$data = array(
			"image" => $slider_image,
		);

		$add = $this->admin_model->create($data);
		if ($add) {
            $this->session->set_flashdata('msg', 'add successfully');
            redirect('slider');
        }else{
            $this->session->set_flashdata('error', 'please add category');
            redirect('slider');
        }

	}










	/* Explore Tab Routes Start */
	
	public function approach()
	{
		$data['approach']  = $this->admin_model->get_our_approach();
		$data['main'] = 'admin/approach';
		$this->load->view('admin/header1');
		$this->load->view('admin/approach',$data);
		$this->load->view('admin/footer1');
	}

	public function approach_add(){
		$data = array(
			"content" => $this->input->post('content'),
		);
		$approach_add = $this->admin_model->our_approach($data);
		if ($approach_add) {
            $this->session->set_flashdata('msg', 'add successfully');
            redirect('approach');
        }else{
            $this->session->set_flashdata('error', 'please add');
            redirect('approach');
        }

	}
	public function delete($id){
		$this->admin_model->approach_delete($id);
		$this->session->set_flashdata('danger', 'successfully Delete');
		redirect('approach');
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