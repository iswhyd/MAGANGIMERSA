<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mvideo');
	}
	public function tambah(){
		$this->Mvideo->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/video'));
	}
	public function edit(){
		$this->Mvideo->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/video'));
	}
	public function hapus(){
		$this->Mvideo->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/video'));
	}
}