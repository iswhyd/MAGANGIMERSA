<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agama extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Magama');
	}
	public function tambah(){
		$this->Magama->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/agama'));
	}
	public function edit(){
		$this->Magama->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/agama'));
	}
	public function hapus(){
		$this->Magama->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/agama'));
	}
}