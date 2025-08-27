<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mlinkterkait extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		return $this->db->get('linkterkait');
	}
	public function tambah(){
		$d['nama_linkterkait']= $this->input->post('nama_linkterkait');
		$d['link_linkterkait']= $this->input->post('link_linkterkait');
		$this->db->insert('linkterkait',$d);
	}
	public function detaillinkterkait(){
		$this->db->where('id_linkterkait',$this->uri->segment(3));
		return $this->db->get('linkterkait');
	}
	public function edit(){
		$d['nama_linkterkait']= $this->input->post('nama_linkterkait');
		$d['link_linkterkait']= $this->input->post('link_linkterkait');
		$this->db->where('id_linkterkait',$this->input->post('id_linkterkait'));
		$this->db->update('linkterkait',$d);
	}
	public function hapus(){
		$this->db->where('id_linkterkait',$this->uri->segment(3));
		$this->db->delete('linkterkait');
	}
	public function getone($id_linkterkait){
		$this->db->where('id_linkterkait',$id_linkterkait);
		return $this->db->get('linkterkait');
	}
}