<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikanpenduduk extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mpendidikanpenduduk');
	}
	public function tambah(){
		$this->Mpendidikanpenduduk->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/pendidikanpenduduk'));
	}
	public function edit(){
		$this->Mpendidikanpenduduk->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/pendidikanpenduduk'));
	}
	public function hapus(){
		$this->Mpendidikanpenduduk->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/pendidikanpenduduk'));
	}
}