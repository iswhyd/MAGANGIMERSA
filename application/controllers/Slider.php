<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mslider');
	}
	public function tambah(){
		$temp = explode(".", $_FILES['fileslider']['name']);
		$new_name = time().'.'.end($temp);
		$config['upload_path'] = './media/slider/';
	   $config['file_name'] = $new_name;
	   $config['allowed_types'] = 'png|jpg|jpeg';
	   $this->load->library('upload');
	   $this->upload->initialize($config);
	   if (!$this->upload->do_upload('fileslider')){
	   	$this->session->set_flashdata('msg','gagal');
			redirect(base_url('admin/slider'));
	   }
	   else{
	   	$media = $this->upload->data('fileslider');
	   	$foto_slider= 'media/slider/'.$new_name;
	   	$this->Mslider->tambah($foto_slider);
			$this->session->set_flashdata('msg','simpan');
			redirect(base_url('admin/slider'));
	   }
	}
	public function edit(){
		$this->Mslider->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/slider'));
	}
	public function hapus(){
		$slider= $this->Mslider->detailslider(); foreach($slider->result() as $p);
		unlink('./'.$p->foto_slider);
		$this->Mslider->hapus();
		$this->session->set_flashdata('msg','hapus');
		echo "oke";
		//redirect(base_url('admin/slider'));
	}
	public function offkan(){
		$this->Mslider->offkan();
		redirect(base_url('admin/slider'));
	}
	public function onkan(){
		$this->Mslider->onkan();
		redirect(base_url('admin/slider'));
	}
}