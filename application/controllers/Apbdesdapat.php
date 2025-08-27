<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apbdesdapat extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mapbdesdapat');
	}
	public function tambah(){
		$this->Mapbdesdapat->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/apbdesdapat'));
	}
	public function edit(){
		$this->Mapbdesdapat->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/apbdesdapat'));
	}
	public function hapus(){
		$this->Mapbdesdapat->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/apbdesdapat'));
	}
}