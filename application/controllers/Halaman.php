<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mhalaman');
	}
	public function tambah(){
		$this->Mhalaman->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/halaman'));
	}
	public function edit(){
		$this->Mhalaman->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/halaman'));
	}
	public function hapus(){
		$this->Mhalaman->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/halaman'));
	}
}