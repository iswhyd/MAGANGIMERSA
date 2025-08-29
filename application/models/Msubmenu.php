<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Msubmenu extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->where('id_menu',$this->uri->segment(3));
		$this->db->order_by('id_submenu','asc');
		return $this->db->get('submenu');
	}
	public function tambah(){
		$d['id_menu']= $this->input->post('id_menu');
		$d['nama_submenu']= $this->input->post('nama_submenu');
		$d['link_submenu']= $this->input->post('link_submenu');
		$this->db->insert('submenu',$d);
	}
	public function detailsubmenu(){
		$this->db->where('id_submenu',$this->uri->segment(3));
		return $this->db->get('submenu');
	}
	public function hapus(){
		$this->db->where('id_submenu',$this->uri->segment(3));
		$this->db->delete('submenu');
	}
	public function getone($id_submenu){
		$this->db->where('id_submenu',$id_submenu);
		return $this->db->get('submenu');
	}
	public function tamurutan_submenu($id_submenu,$urutan_submenu){
		$d['urutan_submenu']= $urutan_submenu;
		$this->db->where('id_submenu',$id_submenu);
		$this->db->update('submenu',$d);
	}
	public function kururutan_submenu($id_submenu,$urutan_submenu){
		$d['urutan_submenu']= $urutan_submenu;
		$this->db->where('id_submenu',$id_submenu);
		$this->db->update('submenu',$d);
	}
//frontend
	public function submenudarimenu($id_menu){
		$this->db->where('id_menu',$id_menu);
		$this->db->order_by('urutan_submenu','asc');
		return $this->db->get('submenu');
	}
}