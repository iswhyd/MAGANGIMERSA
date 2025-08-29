<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mpekerjaanpenduduk extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('id','asc');
		return $this->db->get('pekerjaanpenduduk');
	}
	public function tambah(){
		$d['tahun']= $this->input->post('tahun');
		$d['kdpekerjaan']= $this->input->post('kdpekerjaan');
		$d['jumlah']= $this->input->post('jumlah');
		$d['jk']= $this->input->post('jk');
		$this->db->insert('pekerjaanpenduduk',$d);
	}
	public function detailpekerjaanpenduduk(){
		$this->db->where('id',$this->uri->segment(3));
		return $this->db->get('pekerjaanpenduduk');
	}
	public function edit(){
		$d['tahun']= $this->input->post('tahun');
		$d['kdpekerjaan']= $this->input->post('kdpekerjaan');
		$d['jumlah']= $this->input->post('jumlah');
		$d['jk']= $this->input->post('jk');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('pekerjaanpenduduk',$d);
	}
	public function hapus(){
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('pekerjaanpenduduk');
	}
	public function getone($id){
		$this->db->where('id',$id);
		return $this->db->get('pekerjaanpenduduk');
	}
	public function ambiltahun($tahun){
		$this->db->where('tahun',$tahun);
		return $this->db->get('pekerjaanpenduduk');
	}
	public function hitungtahunjk($kd_pekerjaan, $jk, $tahun = null){
        if($tahun == null){
            $this->db->select_max('tahun');
            $row = $this->db->get('pekerjaanpenduduk')->row_array();
            $tahun = $row['tahun'];
        }
        $this->db->select_sum('jumlah');
        $this->db->where('kdpekerjaan', $kd_pekerjaan);
        $this->db->where('jk', $jk);
        $this->db->where('tahun', $tahun);
        return $this->db->get('pekerjaanpenduduk');
    }
}