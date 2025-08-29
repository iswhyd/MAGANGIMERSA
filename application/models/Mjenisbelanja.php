<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mjenisbelanja extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('nama_jenisbelanja','asc');
		return $this->db->get('jenisbelanja');
	}
	public function tambah(){
		$d['nama_jenisbelanja']= $this->input->post('nama_jenisbelanja');
		$d['kd_jenisbelanja']= $this->input->post('kd_jenisbelanja');
		$this->db->insert('jenisbelanja',$d);
	}
	public function detailjenisbelanja(){
		$this->db->where('id',$this->uri->segment(3));
		return $this->db->get('jenisbelanja');
	}
	public function edit(){
		$d['nama_jenisbelanja']= $this->input->post('nama_jenisbelanja');
		$d['kd_jenisbelanja']= $this->input->post('kd_jenisbelanja');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('jenisbelanja',$d);
	}
	public function hapus(){
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('jenisbelanja');
	}
	public function getone($id){
		$this->db->where('id',$id);
		return $this->db->get('jenisbelanja');
	}
	public function getonekd($kd_jenisbelanja){
		$this->db->where('kd_jenisbelanja',$kd_jenisbelanja);
		return $this->db->get('jenisbelanja');
	}
}