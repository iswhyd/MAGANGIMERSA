<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Linkterkait extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mlinkterkait');
	}
	public function tambah(){
		$this->Mlinkterkait->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/linkterkait'));
	}
	public function edit(){
		$this->Mlinkterkait->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/linkterkait'));
	}
	public function hapus(){
		$this->Mlinkterkait->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/linkterkait'));
	}
}