<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mslider extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('id_slider','desc');
		return $this->db->get('slider');
	}
	public function tambah($foto_slider){
		$d['ket_slider']= $this->input->post('ket_slider');
		$d['des_slider']= $this->input->post('des_slider');
		$d['foto_slider']= $foto_slider;
		$d['status_slider']= 'on';
		$this->db->insert('slider',$d);
	}
	public function detailslider(){
		$this->db->where('id_slider',$this->uri->segment(3));
		return $this->db->get('slider');
	}
	public function edit(){
		$d['nama_slider']= $this->input->post('nama_slider');
		$this->db->where('id_slider',$this->input->post('id_slider'));
		$this->db->update('slider',$d);
	}
	public function hapus(){
		$this->db->where('id_slider',$this->uri->segment(3));
		$this->db->delete('slider');
	}
	public function getone($id_slider){
		$this->db->where('id_slider',$id_slider);
		return $this->db->get('slider');
	}
	public function offkan(){
		$d['status_slider']= 'off';
		$this->db->where('id_slider',$this->uri->segment(3));
		$this->db->update('slider',$d);
	}
	public function onkan(){
		$d['status_slider']= 'on';
		$this->db->where('id_slider',$this->uri->segment(3));
		$this->db->update('slider',$d);
	}
}