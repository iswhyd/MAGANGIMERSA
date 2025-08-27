<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Mwebsite');
	}
	public function edit(){
		$this->Mwebsite->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/website'));
	}
	public function editlogo(){
		$temp = explode(".", $_FILES['filelogo']['name']);
		$new_name = time().'.'.end($temp);
		$config['upload_path'] = './media/logo/';
	   $config['file_name'] = $new_name;
	   $config['allowed_types'] = 'png|jpg';
	   $this->load->library('upload');
	   $this->upload->initialize($config);
	   if (!$this->upload->do_upload('filelogo')){
	   	$this->session->set_flashdata('msg','gagal');
	   }
	   else{
	   	$website= $this->Mwebsite->identitas(); foreach($website->result() as $p);
			unlink('./'.$p->logo_website);
	   	$media = $this->upload->data('filelogo');
	   	$logo_website= 'media/logo/'.$new_name;
	   	$this->Mwebsite->editlogo($logo_website);
	   	
	   }
	   $temp = explode(".", $_FILES['filelogomenu']['name']);
		$new_name = time().'.'.end($temp);
		$config['upload_path'] = './media/logo/';
	   $config['file_name'] = $new_name;
	   $config['allowed_types'] = 'png|jpg';
	   $this->load->library('upload');
	   $this->upload->initialize($config);
	   if (!$this->upload->do_upload('filelogomenu')){
	   	$this->session->set_flashdata('msg','gagal');
	   }
	   else{
	   	$website= $this->Mwebsite->identitas(); foreach($website->result() as $p);
			unlink('./'.$p->logo_menu);
	   	$media = $this->upload->data('filelogomenu');
	   	$logo_menu= 'media/logo/'.$new_name;
	   	$this->Mwebsite->editlogomenu($logo_menu);
	   	
	   }
	   $this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/website'));
	}
	public function sambutan(){
		$temp = explode(".", $_FILES['filekepsek']['name']);
		$new_name = time().'.'.end($temp);
		$config['upload_path'] = './media/kepsek/';
	   $config['file_name'] = $new_name;
	   $config['allowed_types'] = 'png|jpg|jpeg';
	   $this->load->library('upload');
	   $this->upload->initialize($config);
	   if (!$this->upload->do_upload('filekepsek')){
	   	$foto_kepsek= "";
	   	$this->Mwebsite->sambutan($foto_kepsek);
	   	$this->session->set_flashdata('msg','edit');
			redirect(base_url('admin/website'));
	   }
	   else{
	   	$website= $this->Mwebsite->identitas(); foreach($website->result() as $p);
			unlink('./'.$p->foto_kepsek);
	   	$media = $this->upload->data('filekepsek');
	   	$foto_kepsek= 'media/kepsek/'.$new_name;
	   	$this->Mwebsite->sambutan($foto_kepsek);
	   	$this->session->set_flashdata('msg','edit');
			redirect(base_url('admin/website'));
	   }
	}
	public function infosiswabaru(){
		$this->Mwebsite->infosiswabaru();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/infosiswabaru'));
	}
}