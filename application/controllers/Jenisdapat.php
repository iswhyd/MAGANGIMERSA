<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenisdapat extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mjenisdapat');
	}
	public function tambah(){
		$this->Mjenisdapat->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/jenisdapat'));
	}
	public function edit(){
		$this->Mjenisdapat->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/jenisdapat'));
	}
	public function hapus(){
		$this->Mjenisdapat->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/jenisdapat'));
	}
}