<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mgallery');
	}
	public function tambah(){
		$temp = explode(".", $_FILES['filegallery']['name']);
		$new_name = time().'.'.end($temp);
		$config['upload_path'] = './media/gallery/';
	   $config['file_name'] = $new_name;
	   $config['allowed_types'] = 'png|jpg|jpeg';
	   $this->load->library('upload');
	   $this->upload->initialize($config);
	   if (!$this->upload->do_upload('filegallery')){
	   	$this->session->set_flashdata('msg','gagal');
			redirect(base_url('admin/gallery'));
	   }
	   else{
	   	$media = $this->upload->data('filegallery');
	   	$foto_gallery= 'media/gallery/'.$new_name;
	   	$this->Mgallery->tambah($foto_gallery);
			$this->session->set_flashdata('msg','simpan');
			redirect(base_url('admin/gallery'));
	   }
	}
	public function edit(){
		$this->Mgallery->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/gallery'));
	}
	public function hapus(){
		$gallery= $this->Mgallery->detailgallery(); foreach($gallery->result() as $p);
		unlink('./'.$p->foto_gallery);
		$this->Mgallery->hapus();
		$this->session->set_flashdata('msg','hapus');
		echo "oke";
		//redirect(base_url('admin/gallery'));
	}
	public function offkan(){
		$this->Mgallery->offkan();
		redirect(base_url('admin/gallery'));
	}
	public function onkan(){
		$this->Mgallery->onkan();
		redirect(base_url('admin/gallery'));
	}
}