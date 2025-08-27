<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mapbdesbelanja extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->select('*');
		$this->db->order_by('id','asc');
		return $this->db->get('apbdesbelanja');
	}
	public function tambah(){
		$d['tahun']= $this->input->post('tahun');
		$d['kdjenisbelanja']= $this->input->post('kdjenisbelanja');
		$d['penyerapan']= $this->input->post('penyerapan');
		$d['pagu']= $this->input->post('pagu');
		$this->db->insert('apbdesbelanja',$d);
	}
	public function detailapbdesbelanja(){
		$this->db->where('id',$this->uri->segment(3));
		return $this->db->get('apbdesbelanja');
	}
	public function edit(){
		$d['tahun']= $this->input->post('tahun');
		$d['kdjenisbelanja']= $this->input->post('kdjenisbelanja');
		$d['penyerapan']= $this->input->post('penyerapan');
		$d['pagu']= $this->input->post('pagu');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('apbdesbelanja',$d);
	}
	public function hapus(){
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('apbdesbelanja');
	}
	public function getone($id){
		$this->db->where('id',$id);
		return $this->db->get('apbdesbelanja');
	}
	public function ambiltahun($tahun){
		$this->db->where('tahun',$tahun);
		return $this->db->get('apbdesbelanja');
	}
	public function hitungtahunjenis($kdjenisbelanja){
		$tahun= date('Y');
		$this->db->where('tahun',$tahun);
		$this->db->where('kdjenisbelanja',$kdjenisbelanja);
		return $this->db->get('apbdesbelanja');
	}
}