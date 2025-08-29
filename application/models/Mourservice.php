<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mourservice extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('id_ourservice','desc');
		return $this->db->get('ourservice');
	}
	public function tambah($foto_ourservice){
		$d['judul_ourservice']= $this->input->post('judul_ourservice');
		$d['ket_ourservice']= $this->input->post('ket_ourservice');
		$d['link_ourservice']= $this->input->post('link_ourservice');
		$d['foto_ourservice']= $foto_ourservice;
		$this->db->insert('ourservice',$d);
	}
	public function detailourservice(){
		$this->db->where('id_ourservice',$this->uri->segment(3));
		return $this->db->get('ourservice');
	}
	public function edit($foto_ourservice){
		$d['judul_ourservice']= $this->input->post('judul_ourservice');
		$d['ket_ourservice']= $this->input->post('ket_ourservice');
		$d['link_ourservice']= $this->input->post('link_ourservice');
		if($foto_ourservice!=""){
			$d['foto_ourservice']= $foto_ourservice;
		}
		$this->db->where('id_ourservice',$this->input->post('id_ourservice'));
		$this->db->update('ourservice',$d);
	}
	public function hapus(){
		$this->db->where('id_ourservice',$this->uri->segment(3));
		$this->db->delete('ourservice');
	}
	public function getone($id_ourservice){
		$this->db->where('id_ourservice',$id_ourservice);
		return $this->db->get('ourservice');
	}
	public function offkan(){
		$d['status_ourservice']= 'off';
		$this->db->where('id_ourservice',$this->uri->segment(3));
		$this->db->update('ourservice',$d);
	}
	public function onkan(){
		$d['status_ourservice']= 'on';
		$this->db->where('id_ourservice',$this->uri->segment(3));
		$this->db->update('ourservice',$d);
	}
}