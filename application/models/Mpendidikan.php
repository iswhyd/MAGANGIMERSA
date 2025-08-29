<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mpendidikan extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('nama_pendidikan','asc');
		return $this->db->get('pendidikan');
	}
	public function tambah(){
		$d['nama_pendidikan']= $this->input->post('nama_pendidikan');
		$d['kd_pendidikan']= $this->input->post('kd_pendidikan');
		$this->db->insert('pendidikan',$d);
	}
	public function detailpendidikan(){
		$this->db->where('id',$this->uri->segment(3));
		return $this->db->get('pendidikan');
	}
	public function edit(){
		$d['nama_pendidikan']= $this->input->post('nama_pendidikan');
		$d['kd_pendidikan']= $this->input->post('kd_pendidikan');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('pendidikan',$d);
	}
	public function hapus(){
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('pendidikan');
	}
	public function getone($id){
		$this->db->where('id',$id);
		return $this->db->get('pendidikan');
	}
	public function getonekd($kd_pendidikan){
		$this->db->where('kd_pendidikan',$kd_pendidikan);
		return $this->db->get('pendidikan');
	}
}