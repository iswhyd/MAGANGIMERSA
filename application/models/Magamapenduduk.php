<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Magamapenduduk extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->select('*');
		$this->db->order_by('id','asc');
		return $this->db->get('agamapenduduk');
	}
	public function tambah(){
		$d['tahun']= $this->input->post('tahun');
		$d['kdagama']= $this->input->post('kdagama');
		$d['jumlah']= $this->input->post('jumlah');
		$d['jk']= $this->input->post('jk');
		$this->db->insert('agamapenduduk',$d);
	}
	public function detailagamapenduduk(){
		$this->db->where('id',$this->uri->segment(3));
		return $this->db->get('agamapenduduk');
	}
	public function edit(){
		$d['tahun']= $this->input->post('tahun');
		$d['kdagama']= $this->input->post('kdagama');
		$d['jumlah']= $this->input->post('jumlah');
		$d['jk']= $this->input->post('jk');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('agamapenduduk',$d);
	}
	public function hapus(){
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('agamapenduduk');
	}
	public function getone($id){
		$this->db->where('id',$id);
		return $this->db->get('agamapenduduk');
	}
	public function ambiltahun($tahun){
		$this->db->where('tahun',$tahun);
		return $this->db->get('agamapenduduk');
	}
	public function hitungtahunjk($kd_agama, $jk, $tahun = null){
        if($tahun == null){
            $this->db->select_max('tahun');
            $row = $this->db->get('agamapenduduk')->row_array();
            $tahun = $row['tahun'];
        }
        $this->db->select_sum('jumlah');
        $this->db->where('kdagama', $kd_agama);
        $this->db->where('jk', $jk);
        $this->db->where('tahun', $tahun);
        return $this->db->get('agamapenduduk');
    }
}