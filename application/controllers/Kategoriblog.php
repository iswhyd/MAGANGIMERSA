<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriblog extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mkategoriblog');
	}
	public function tambah(){
		$this->Mkategoriblog->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/kategoriblog'));
	}
	public function edit(){
		$this->Mkategoriblog->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/kategoriblog'));
	}
	public function hapus(){
		$this->Mkategoriblog->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/kategoriblog'));
	}
}