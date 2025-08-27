<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mjenisdapat extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('nama_jenisdapat','asc');
		return $this->db->get('jenisdapat');
	}
	public function tambah(){
		$d['nama_jenisdapat']= $this->input->post('nama_jenisdapat');
		$d['kd_jenisdapat']= $this->input->post('kd_jenisdapat');
		$this->db->insert('jenisdapat',$d);
	}
	public function detailjenisdapat(){
		$this->db->where('id',$this->uri->segment(3));
		return $this->db->get('jenisdapat');
	}
	public function edit(){
		$d['nama_jenisdapat']= $this->input->post('nama_jenisdapat');
		$d['kd_jenisdapat']= $this->input->post('kd_jenisdapat');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('jenisdapat',$d);
	}
	public function hapus(){
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('jenisdapat');
	}
	public function getone($id){
		$this->db->where('id',$id);
		return $this->db->get('jenisdapat');
	}
	public function getonekd($kd_jenisdapat){
		$this->db->where('kd_jenisdapat',$kd_jenisdapat);
		return $this->db->get('jenisdapat');
	}
}