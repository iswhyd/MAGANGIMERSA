<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaan extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mpekerjaan');
	}
	public function tambah(){
		$this->Mpekerjaan->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/pekerjaan'));
	}
	public function edit(){
		$this->Mpekerjaan->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/pekerjaan'));
	}
	public function hapus(){
		$this->Mpekerjaan->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/pekerjaan'));
	}
}