<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mmenu extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('id_menu','asc');
		return $this->db->get('menu');
	}
	public function tambah(){
		$d['nama_menu']= $this->input->post('nama_menu');
		$d['link_menu']= $this->input->post('link_menu');
		$this->db->insert('menu',$d);
	}
	public function detailmenu(){
		$this->db->where('id_menu',$this->uri->segment(3));
		return $this->db->get('menu');
	}
	public function edit(){
		$d['nama_menu']= $this->input->post('nama_menu');
		$d['link_menu']= $this->input->post('link_menu');
		$this->db->where('id_menu',$this->input->post('id_menu'));
		$this->db->update('menu',$d);
	}
	public function hapus(){
		$this->db->where('id_menu',$this->uri->segment(3));
		$this->db->delete('menu');
		$this->db->where('id_menu',$this->uri->segment(3));
		$this->db->delete('submenu');
	}
	public function getone($id_menu){
		$this->db->where('id_menu',$id_menu);
		return $this->db->get('menu');
	}
	public function tamurutan_menu($id_menu,$urutan_menu){
		$d['urutan_menu']= $urutan_menu;
		$this->db->where('id_menu',$id_menu);
		$this->db->update('menu',$d);
	}
	public function kururutan_menu($id_menu,$urutan_menu){
		$d['urutan_menu']= $urutan_menu;
		$this->db->where('id_menu',$id_menu);
		$this->db->update('menu',$d);
	}
//frontend
	public function menuheader(){
		$this->db->order_by('urutan_menu','asc');
		return $this->db->get('menu');
	}
}