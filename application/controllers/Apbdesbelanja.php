<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apbdesbelanja extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mapbdesbelanja');
	}
	public function tambah(){
		$this->Mapbdesbelanja->tambah();
		$this->session->set_flashdata('msg','simpan');
		redirect(base_url('admin/apbdesbelanja'));
	}
	public function edit(){
		$this->Mapbdesbelanja->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/apbdesbelanja'));
	}
	public function hapus(){
		$this->Mapbdesbelanja->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/apbdesbelanja'));
	}
}