<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Magenda extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('tglinput_agenda','desc');
		return $this->db->get('agenda');
	}
	public function tambah($foto_agenda){
		$d['judul_agenda']= $this->input->post('judul_agenda');
		$d['isi_agenda']= $this->input->post('isi_agenda');
		$d['tempat_agenda']= $this->input->post('tempat_agenda');
		$d['tgl_agenda']= $this->input->post('tgl_agenda');
		$d['waktu_agenda']= $this->input->post('waktu_agenda');
		$d['foto_agenda']= $foto_agenda;
		$d['tglinput_agenda']= date('Y-m-d H:i:s');
		$this->db->insert('agenda',$d);
	}
	public function detailagenda(){
		$this->db->where('id_agenda',$this->uri->segment(3));
		return $this->db->get('agenda');
	}
	public function edit($foto_agenda){
		$d['judul_agenda']= $this->input->post('judul_agenda');
		$d['isi_agenda']= $this->input->post('isi_agenda');
		$d['tempat_agenda']= $this->input->post('tempat_agenda');
		$d['tgl_agenda']= $this->input->post('tgl_agenda');
		$d['waktu_agenda']= $this->input->post('waktu_agenda');
		if($foto_agenda!=""){
			$d['foto_agenda']= $foto_agenda;
		}
		$d['tglinput_agenda']= date('Y-m-d H:i:s');
		$this->db->where('id_agenda',$this->uri->segment(3));
		$this->db->update('agenda',$d);
	}
	public function hapus(){
		$this->db->where('id_agenda',$this->uri->segment(3));
		$this->db->delete('agenda');
	}
	public function getone($id_agenda){
		$this->db->where('id_agenda',$id_agenda);
		return $this->db->get('agenda');
	}
//frontend
	public function agenda($limit, $start){
		$this->db->order_by('tglinput_agenda','desc');
		return $this->db->get('agenda',$limit, $start);
	}
	public function newagenda(){
		$this->db->limit(7);
		$this->db->order_by('tglinput_agenda','desc');
		return $this->db->get('agenda');
	}
	public function getagenda($id_agenda){
		$this->db->where('id_agenda',$id_agenda);
		return $this->db->get('agenda');
	}
	public function lastagenda(){
		$this->db->limit(4);
		$this->db->order_by('tglinput_agenda','desc');
		return $this->db->get('agenda');
	}
}