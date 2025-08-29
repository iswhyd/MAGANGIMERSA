<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenisbelanja extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mjenisbelanja');
	}
	public function tambah(){
		$this->Mjenisbelanja->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/jenisbelanja'));
	}
	public function edit(){
		$this->Mjenisbelanja->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/jenisbelanja'));
	}
	public function hapus(){
		$this->Mjenisbelanja->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/jenisbelanja'));
	}
}