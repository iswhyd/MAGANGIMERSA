<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategorigallery extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mkategorigallery');
	}
	public function tambah(){
		$this->Mkategorigallery->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/kategorigallery'));
	}
	public function edit(){
		$this->Mkategorigallery->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/kategorigallery'));
	}
	public function hapus(){
		$this->Mkategorigallery->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/kategorigallery'));
	}
}