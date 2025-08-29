<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mmenu');
	}
	public function tambah(){
		$this->Mmenu->tambah();
		$this->session->set_flashdata('msg','simpan');
		echo "sukses";
	}
	public function edit(){
		$this->Mmenu->edit();
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/menu'));
	}
	public function hapus(){
		$this->Mmenu->hapus();
		$this->session->set_flashdata('msg','hapus');

		echo "oke";
		//redirect(base_url('admin/menu'));
	}
	public function loadmenu(){
		$menu= $this->Mmenu->data();
		include APPPATH.'views/admin/menu/loadmenu.php';
	}
	public function tamurutan_menu(){
		$id_menu= $this->uri->segment(3);
		$menu= $this->Mmenu->getone($id_menu); foreach($menu->result() as $m);
		$urutan_menu= $m->urutan_menu+1;
		$this->Mmenu->tamurutan_menu($id_menu,$urutan_menu);
		echo "sukses";
	}
	public function kururutan_menu(){
		$id_menu= $this->uri->segment(3);
		$menu= $this->Mmenu->getone($id_menu); foreach($menu->result() as $m);
		$urutan_menu= $m->urutan_menu-1;
		$this->Mmenu->kururutan_menu($id_menu,$urutan_menu);
		echo "sukses";
	}
}