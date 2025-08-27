<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mblog');
	}
	public function tambah(){
		$temp = explode(".", $_FILES['fileblog']['name']);
		$new_name = time().'.'.end($temp);
		$config['upload_path'] = './media/fotoblog/';
	   $config['file_name'] = $new_name;
	   $config['allowed_types'] = 'png|jpg|jpeg';
	   $this->load->library('upload');
	   $this->upload->initialize($config);
	   if (!$this->upload->do_upload('fileblog')){
	   	$this->session->set_flashdata('msg','gagal');
			redirect(base_url('admin/inputblog'));
	   }
	   else{
	   	$media = $this->upload->data('fileblog');
	   	$foto_blog= 'media/fotoblog/'.$new_name;
	   	$this->Mblog->tambah($foto_blog);
			$this->session->set_flashdata('msg','simpan');
			redirect(base_url('admin/inputblog'));
	   }
	}
	public function edit(){
		$id_blog= $this->uri->segment(3);
		$temp = explode(".", $_FILES['fileblog']['name']);
		$new_name = time().'.'.end($temp);
		$config['upload_path'] = './media/fotoblog/';
	   $config['file_name'] = $new_name;
	   $config['allowed_types'] = 'png|jpg|jpeg';
	   $this->load->library('upload');
	   $this->upload->initialize($config);
	   if (!$this->upload->do_upload('fileblog')){
	   	$foto_blog= "";
	   	$this->Mblog->edit($foto_blog);
			$this->session->set_flashdata('msg','edit');
			redirect(base_url('admin/editblog/'.$id_blog));
	   }
	   else{
	   	$media = $this->upload->data('fileblog');
	   	$blog= $this->Mblog->detailblog(); foreach($blog->result() as $p);
			unlink('./'.$p->foto_blog);
	   	$foto_blog= 'media/fotoblog/'.$new_name;
	   	$this->Mblog->edit($foto_blog);
			$this->session->set_flashdata('msg','edit');
			redirect(base_url('admin/editblog/'.$id_blog));
	   }
	}
	public function hapus(){
		$blog= $this->Mblog->detailblog(); foreach($blog->result() as $p);
		unlink('./'.$p->foto_blog);
		$this->Mblog->hapus();
		$this->session->set_flashdata('msg','hapus');
		echo "oke";
		//redirect(base_url('admin/blog'));
	}
	public function offkan(){
		$this->Mblog->offkan();
		redirect(base_url('admin/blog'));
	}
	public function onkan(){
		$this->Mblog->onkan();
		redirect(base_url('admin/blog'));
	}
}