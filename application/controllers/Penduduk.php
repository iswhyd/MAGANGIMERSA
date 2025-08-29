<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mpenduduk');
	}
	public function tambah(){
		$this->Mpenduduk->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/penduduk'));
	}
	public function edit(){
		$this->Mpenduduk->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/penduduk'));
	}
	public function hapus(){
		$this->Mpenduduk->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/penduduk'));
	}
}