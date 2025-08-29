<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mhalaman extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('tglinput_halaman','desc');
		return $this->db->get('halaman');
	}
	public function tambah(){
		$d['judul_halaman']= $this->input->post('judul_halaman');
		$d['isi_halaman']= $this->input->post('isi_halaman');
		$d['tglinput_halaman']= date('Y-m-d H:i:s');
		$this->db->insert('halaman',$d);
	}
	public function detailhalaman(){
		$this->db->where('id_halaman',$this->uri->segment(3));
		return $this->db->get('halaman');
	}
	public function edit(){
		$d['judul_halaman']= $this->input->post('judul_halaman');
		$d['isi_halaman']= $this->input->post('isi_halaman');
		$d['tglinput_halaman']= date('Y-m-d H:i:s');
		$this->db->where('id_halaman',$this->uri->segment(3));
		$this->db->update('halaman',$d);
	}
	public function hapus(){
		$this->db->where('id_halaman',$this->uri->segment(3));
		$this->db->delete('halaman');
	}
	public function getone($id_halaman){
		$this->db->where('id_halaman',$id_halaman);
		return $this->db->get('halaman');
	}
}