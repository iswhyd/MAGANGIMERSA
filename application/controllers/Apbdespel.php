<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apbdespel extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mapbdespel');
	}
	public function tambah(){
		$this->Mapbdespel->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/apbdespel'));
	}
	public function edit(){
		$this->Mapbdespel->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/apbdespel'));
	}
	public function hapus(){
		$this->Mapbdespel->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/apbdespel'));
	}
}