<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaanpenduduk extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mpekerjaanpenduduk');
	}
	public function tambah(){
		$this->Mpekerjaanpenduduk->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/pekerjaanpenduduk'));
	}
	public function edit(){
		$this->Mpekerjaanpenduduk->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/pekerjaanpenduduk'));
	}
	public function hapus(){
		$this->Mpekerjaanpenduduk->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/pekerjaanpenduduk'));
	}
}