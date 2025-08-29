<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mkategorigallery extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('nama_kategorigallery','asc');
		return $this->db->get('kategorigallery');
	}
	public function tambah(){
		$d['nama_kategorigallery']= $this->input->post('nama_kategorigallery');
		$this->db->insert('kategorigallery',$d);
	}
	public function detailkategorigallery(){
		$this->db->where('id_kategorigallery',$this->uri->segment(3));
		return $this->db->get('kategorigallery');
	}
	public function edit(){
		$d['nama_kategorigallery']= $this->input->post('nama_kategorigallery');
		$this->db->where('id_kategorigallery',$this->input->post('id_kategorigallery'));
		$this->db->update('kategorigallery',$d);
	}
	public function hapus(){
		$this->db->where('id_kategorigallery',$this->uri->segment(3));
		$this->db->delete('kategorigallery');
	}
	public function getone($id_kategorigallery){
		$this->db->where('id_kategorigallery',$id_kategorigallery);
		return $this->db->get('kategorigallery');
	}
}