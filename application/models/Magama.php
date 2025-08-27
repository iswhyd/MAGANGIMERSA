<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Magama extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('nama_agama','asc');
		return $this->db->get('agama');
	}
	public function tambah(){
		$d['nama_agama']= $this->input->post('nama_agama');
		$d['kd_agama']= $this->input->post('kd_agama');
		$this->db->insert('agama',$d);
	}
	public function detailagama(){
		$this->db->where('id',$this->uri->segment(3));
		return $this->db->get('agama');
	}
	public function edit(){
		$d['nama_agama']= $this->input->post('nama_agama');
		$d['kd_agama']= $this->input->post('kd_agama');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('agama',$d);
	}
	public function hapus(){
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('agama');
	}
	public function getone($id){
		$this->db->where('id',$id);
		return $this->db->get('agama');
	}
	public function getonekd($kd_agama){
		$this->db->where('kd_agama',$kd_agama);
		return $this->db->get('agama');
	}
}