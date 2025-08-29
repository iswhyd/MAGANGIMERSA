<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mstaff extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('nama_staff','asc');
		return $this->db->get('staff');
	}
	public function tambah($foto_staff){
		$d['nip_staff']= $this->input->post('nip_staff');
		$d['nama_staff']= $this->input->post('nama_staff');
		$d['jabatan_staff']= $this->input->post('jabatan_staff');
		$d['teml_staff']= $this->input->post('teml_staff');
		$d['tangl_staff']= $this->input->post('tangl_staff');
		$d['alamat_staff']= $this->input->post('alamat_staff');
		$d['foto_staff']= $foto_staff;
		$this->db->insert('staff',$d);
	}
	public function detailstaff(){
		$this->db->where('id_staff',$this->uri->segment(3));
		return $this->db->get('staff');
	}
	public function edit($foto_staff){
		$d['nip_staff']= $this->input->post('nip_staff');
		$d['nama_staff']= $this->input->post('nama_staff');
		$d['jabatan_staff']= $this->input->post('jabatan_staff');
		$d['teml_staff']= $this->input->post('teml_staff');
		$d['tangl_staff']= $this->input->post('tangl_staff');
		$d['alamat_staff']= $this->input->post('alamat_staff');
		$d['foto_staff']= $foto_staff;
		$this->db->where('id_staff',$this->input->post('id_staff'));
		$this->db->update('staff',$d);
	}
	public function hapus(){
		$this->db->where('id_staff',$this->uri->segment(3));
		$this->db->delete('staff');
	}
	public function getone($id_staff){
		$this->db->where('id_staff',$id_staff);
		return $this->db->get('staff');
	}
	public function offkan(){
		$d['status_staff']= 'off';
		$this->db->where('id_staff',$this->uri->segment(3));
		$this->db->update('staff',$d);
	}
	public function onkan(){
		$d['status_staff']= 'on';
		$this->db->where('id_staff',$this->uri->segment(3));
		$this->db->update('staff',$d);
	}
//frontend
	public function staff($limit, $start){
		$this->db->order_by('nama_staff','desc');
		return $this->db->get('staff',$limit, $start);
	}
}