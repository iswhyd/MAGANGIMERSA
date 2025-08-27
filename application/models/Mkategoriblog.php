<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mkategoriblog extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('nama_kategoriblog','asc');
		return $this->db->get('kategoriblog');
	}
	public function tambah(){
		$d['nama_kategoriblog']= $this->input->post('nama_kategoriblog');
		$d['parameter_kategoriblog']= $this->input->post('parameter_kategoriblog');
		$this->db->insert('kategoriblog',$d);
	}
	public function detailkategoriblog(){
		$this->db->where('id_kategoriblog',$this->uri->segment(3));
		return $this->db->get('kategoriblog');
	}
	public function edit(){
		$d['nama_kategoriblog']= $this->input->post('nama_kategoriblog');
		$d['parameter_kategoriblog']= $this->input->post('parameter_kategoriblog');
		$this->db->where('id_kategoriblog',$this->input->post('id_kategoriblog'));
		$this->db->update('kategoriblog',$d);
	}
	public function hapus(){
		$this->db->where('id_kategoriblog',$this->uri->segment(3));
		$this->db->delete('kategoriblog');
	}
	public function getone($id_kategoriblog){
		$this->db->where('id_kategoriblog',$id_kategoriblog);
		return $this->db->get('kategoriblog');
	}
	public function getonepar($parameter_kategoriblog){
		$this->db->where('parameter_kategoriblog',$parameter_kategoriblog);
		return $this->db->get('kategoriblog');
	}
}