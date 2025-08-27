<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mapbdesdapat extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->select('*');
		$this->db->order_by('id','asc');
		return $this->db->get('apbdesdapat');
	}
	public function tambah(){
		$d['tahun']= $this->input->post('tahun');
		$d['kdjenisdapat']= $this->input->post('kdjenisdapat');
		$d['penyerapan']= $this->input->post('penyerapan');
		$d['pagu']= $this->input->post('pagu');
		$this->db->insert('apbdesdapat',$d);
	}
	public function detailapbdesdapat(){
		$this->db->where('id',$this->uri->segment(3));
		return $this->db->get('apbdesdapat');
	}
	public function edit(){
		$d['tahun']= $this->input->post('tahun');
		$d['kdjenisdapat']= $this->input->post('kdjenisdapat');
		$d['penyerapan']= $this->input->post('penyerapan');
		$d['pagu']= $this->input->post('pagu');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('apbdesdapat',$d);
	}
	public function hapus(){
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('apbdesdapat');
	}
	public function getone($id){
		$this->db->where('id',$id);
		return $this->db->get('apbdesdapat');
	}
	public function ambiltahun($tahun){
		$this->db->where('tahun',$tahun);
		return $this->db->get('apbdesdapat');
	}
	public function hitungtahunjenis($kdjenisdapat, $tahun = null){
		if ($tahun === null) {
			$tahun = $this->db->select_max('tahun')->get('apbdesdapat')->row()->tahun;
		}
		return $this->db->select('SUM(penyerapan) as penyerapan, SUM(pagu) as pagu')->where('tahun', $tahun)->where('kdjenisdapat', $kdjenisdapat)->get('apbdesdapat');
	}
}