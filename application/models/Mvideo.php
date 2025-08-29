<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mvideo extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('tglinput_video','desc');
		return $this->db->get('video');
	}
	public function tambah(){
		$d['ket_video']= $this->input->post('ket_video');
		$d['link_video']= $this->input->post('link_video');
		$d['tglinput_video']= date('Y-m-d H:i:s');
		$this->db->insert('video',$d);
	}
	public function detailvideo(){
		$this->db->where('id_video',$this->uri->segment(3));
		return $this->db->get('video');
	}
	public function edit(){
		$d['ket_video']= $this->input->post('ket_video');
		$d['link_video']= $this->input->post('link_video');
		$d['tglinput_video']= date('Y-m-d H:i:s');
		$this->db->where('id_video',$this->input->post('id_video'));
		$this->db->update('video',$d);
	}
	public function hapus(){
		$this->db->where('id_video',$this->uri->segment(3));
		$this->db->delete('video');
	}
	public function getone($id_video){
		$this->db->where('id_video',$id_video);
		return $this->db->get('video');
	}
//frontend
	public function galerivideo($limit, $start){
		$this->db->order_by('tglinput_video','desc');
		return $this->db->get('video',$limit, $start);
	}
	public function newvideo(){
		$this->db->limit(3);
		return $this->db->get('video');
	}
}