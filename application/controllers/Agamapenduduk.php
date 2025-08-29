<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agamapenduduk extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Magamapenduduk');
	}
	public function tambah(){
		$this->Magamapenduduk->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/agamapenduduk'));
	}
	public function edit(){
		$this->Magamapenduduk->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/agamapenduduk'));
	}
	public function hapus(){
		$this->Magamapenduduk->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/agamapenduduk'));
	}
}