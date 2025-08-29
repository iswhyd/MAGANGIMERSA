<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ourservice extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mourservice');
	}
	public function tambah(){
		$temp = explode(".", $_FILES['fileourservice']['name']);
		$new_name = time().'.'.end($temp);
		$config['upload_path'] = './media/ourservice/';
	   $config['file_name'] = $new_name;
	   $config['allowed_types'] = 'png|jpg|jpeg';
	   $this->load->library('upload');
	   $this->upload->initialize($config);
	   if (!$this->upload->do_upload('fileourservice')){
	   	$this->session->set_flashdata('msg','gagal');
			redirect(base_url('admin/ourservice'));
	   }
	   else{
	   	$media = $this->upload->data('fileourservice');
	   	$foto_ourservice= 'media/ourservice/'.$new_name;
	   	$this->Mourservice->tambah($foto_ourservice);
			$this->session->set_flashdata('msg','simpan');
			redirect(base_url('admin/ourservice'));
	   }
	}
	public function edit(){
		$temp = explode(".", $_FILES['fileourservice']['name']);
		$new_name = time().'.'.end($temp);
		$config['upload_path'] = './media/ourservice/';
	   $config['file_name'] = $new_name;
	   $config['allowed_types'] = 'png|jpg|jpeg';
	   $this->load->library('upload');
	   $this->upload->initialize($config);
	   if (!$this->upload->do_upload('fileourservice')){
	   	$foto_ourservice= "";
	   	$this->Mourservice->edit($foto_ourservice);
			$this->session->set_flashdata('msg','edit');
			redirect(base_url('admin/ourservice'));
	   }
	   else{
	   	$media = $this->upload->data('fileourservice');
	   	$foto_ourservice= 'media/ourservice/'.$new_name;
	   	$this->Mourservice->edit($foto_ourservice);
			$this->session->set_flashdata('msg','edit');
			redirect(base_url('admin/ourservice'));
	   }
		
	}
	public function hapus(){
		$ourservice= $this->Mourservice->detailourservice(); foreach($ourservice->result() as $p);
		unlink('./'.$p->foto_ourservice);
		$this->Mourservice->hapus();
		$this->session->set_flashdata('msg','hapus');
		echo "oke";
		//redirect(base_url('admin/ourservice'));
	}
	public function offkan(){
		$this->Mourservice->offkan();
		redirect(base_url('admin/ourservice'));
	}
	public function onkan(){
		$this->Mourservice->onkan();
		redirect(base_url('admin/ourservice'));
	}
}