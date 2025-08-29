<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mpendidikan');
	}
	public function tambah(){
		$this->Mpendidikan->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/pendidikan'));
	}
	public function edit(){
		$this->Mpendidikan->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/pendidikan'));
	}
	public function hapus(){
		$this->Mpendidikan->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/pendidikan'));
	}
}