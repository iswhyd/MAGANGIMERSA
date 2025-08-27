<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mpekerjaan extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('nama_pekerjaan','asc');
		return $this->db->get('pekerjaan');
	}
	public function tambah(){
		$d['nama_pekerjaan']= $this->input->post('nama_pekerjaan');
		$d['kd_pekerjaan']= $this->input->post('kd_pekerjaan');
		$this->db->insert('pekerjaan',$d);
	}
	public function detailpekerjaan(){
		$this->db->where('id',$this->uri->segment(3));
		return $this->db->get('pekerjaan');
	}
	public function edit(){
		$d['nama_pekerjaan']= $this->input->post('nama_pekerjaan');
		$d['kd_pekerjaan']= $this->input->post('kd_pekerjaan');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('pekerjaan',$d);
	}
	public function hapus(){
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('pekerjaan');
	}
	public function getone($id){
		$this->db->where('id',$id);
		return $this->db->get('pekerjaan');
	}
	public function getonekd($kd_pekerjaan){
		$this->db->where('kd_pekerjaan',$kd_pekerjaan);
		return $this->db->get('pekerjaan');
	}
}