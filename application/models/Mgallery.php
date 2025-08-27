<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mgallery extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->join('kategorigallery','kategorigallery.id_kategorigallery=gallery.id_kategorigallery','left');
		$this->db->order_by('id_gallery','desc');
		return $this->db->get('gallery');
	}
	public function tambah($foto_gallery){
		$d['ket_gallery']= $this->input->post('ket_gallery');
		$d['id_kategorigallery']= $this->input->post('id_kategorigallery');
		$d['foto_gallery']= $foto_gallery;
		$this->db->insert('gallery',$d);
	}
	public function detailgallery(){
		$this->db->where('id_gallery',$this->uri->segment(3));
		return $this->db->get('gallery');
	}
	public function edit(){
		$d['nama_gallery']= $this->input->post('nama_gallery');
		$this->db->where('id_gallery',$this->input->post('id_gallery'));
		$this->db->update('gallery',$d);
	}
	public function hapus(){
		$this->db->where('id_gallery',$this->uri->segment(3));
		$this->db->delete('gallery');
	}
	public function getone($id_gallery){
		$this->db->where('id_gallery',$id_gallery);
		return $this->db->get('gallery');
	}
//frontend
	public function galerifoto($limit, $start){
		$this->db->join('kategorigallery','kategorigallery.id_kategorigallery=gallery.id_kategorigallery','left');
		$this->db->order_by('id_gallery','desc');
		return $this->db->get('gallery',$limit, $start);
	}
	public function newfoto(){
		$this->db->order_by('id_gallery','desc');
		$this->db->limit(4);
		return $this->db->get('gallery');
	}
}