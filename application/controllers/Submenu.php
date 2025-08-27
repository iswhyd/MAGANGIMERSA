<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenu extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Msubmenu');
	}
	public function tambah(){
		$this->Msubmenu->tambah();
		$this->session->set_flashdata('msg','simpan');
		echo "sukses";
	}
	public function edit(){
		$this->Msubmenu->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/submenu'));
	}
	public function hapus(){
		$this->Msubmenu->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/submenu'));
	}
	public function loadsubmenu(){
		$submenu= $this->Msubmenu->data();
		include APPPATH.'views/admin/submenu/loadsubmenu.php';
	}
	public function tamurutan_submenu(){
		$id_submenu= $this->uri->segment(3);
		$submenu= $this->Msubmenu->getone($id_submenu); foreach($submenu->result() as $m);
		$urutan_submenu= $m->urutan_submenu+1;
		$this->Msubmenu->tamurutan_submenu($id_submenu,$urutan_submenu);
		echo "sukses";
	}
	public function kururutan_submenu(){
		$id_submenu= $this->uri->segment(3);
		$submenu= $this->Msubmenu->getone($id_submenu); foreach($submenu->result() as $m);
		$urutan_submenu= $m->urutan_submenu-1;
		$this->Msubmenu->kururutan_submenu($id_submenu,$urutan_submenu);
		echo "sukses";
	}
}