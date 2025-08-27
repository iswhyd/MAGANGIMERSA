<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mpenduduk extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('tahun','asc');
		return $this->db->get('penduduk');
	}
	public function tambah(){
		$d['tahun']= $this->input->post('tahun');
		$d['cowok']= $this->input->post('cowok');
		$d['cewek']= $this->input->post('cewek');
		$this->db->insert('penduduk',$d);
	}
	public function detailpenduduk(){
		$this->db->where('id',$this->uri->segment(3));
		return $this->db->get('penduduk');
	}
	public function edit(){
		$d['tahun']= $this->input->post('tahun');
		$d['cowok']= $this->input->post('cowok');
		$d['cewek']= $this->input->post('cewek');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('penduduk',$d);
	}
	public function hapus(){
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('penduduk');
	}
	public function getone($id){
		$this->db->where('id',$id);
		return $this->db->get('penduduk');
	}
	public function ambilterbaru(){
		$this->db->order_by('tahun','DESC');
		return $this->db->get('penduduk')->row_array();
	}
}