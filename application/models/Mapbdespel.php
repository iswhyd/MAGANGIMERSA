<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mapbdespel extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->select('*');
		$this->db->order_by('id','asc');
		return $this->db->get('apbdespel');
	}
	public function tambah(){
		$d['tahun']= $this->input->post('tahun');
		$d['dapat']= $this->input->post('dapat');
		$d['pagudapat']= $this->input->post('pagudapat');
		$d['belanja']= $this->input->post('belanja');
		$d['pagubelanja']= $this->input->post('pagubelanja');
		$d['biaya']= $this->input->post('biaya');
		$d['pagubiaya']= $this->input->post('pagubiaya');
		$this->db->insert('apbdespel',$d);
	}
	public function detailapbdespel(){
		$this->db->where('id',$this->uri->segment(3));
		return $this->db->get('apbdespel');
	}
	public function edit(){
		$d['tahun']= $this->input->post('tahun');
		$d['dapat']= $this->input->post('dapat');
		$d['pagudapat']= $this->input->post('pagudapat');
		$d['belanja']= $this->input->post('belanja');
		$d['pagubelanja']= $this->input->post('pagubelanja');
		$d['biaya']= $this->input->post('biaya');
		$d['pagubiaya']= $this->input->post('pagubiaya');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('apbdespel',$d);
	}
	public function hapus(){
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('apbdespel');
	}
	public function getone($id){
		$this->db->where('id',$id);
		return $this->db->get('apbdespel');
	}
	public function ambiltahun($tahun = null){
        if($tahun === null){
			$tahun = $this->db->select_max('tahun')->get('apbdespel')->row()->tahun;
		}
		return $this->db->where('tahun', $tahun)->get('apbdespel');
    }
}