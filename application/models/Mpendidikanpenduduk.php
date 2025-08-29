<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mpendidikanpenduduk extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->order_by('id','asc');
		return $this->db->get('pendidikanpenduduk');
	}
	public function tambah(){
		$d['tahun']= $this->input->post('tahun');
		$d['kdpendidikan']= $this->input->post('kdpendidikan');
		$d['jumlah']= $this->input->post('jumlah');
		$d['jk']= $this->input->post('jk');
		$this->db->insert('pendidikanpenduduk',$d);
	}
	public function detailpendidikanpenduduk(){
		$this->db->where('id',$this->uri->segment(3));
		return $this->db->get('pendidikanpenduduk');
	}
	public function edit(){
		$d['tahun']= $this->input->post('tahun');
		$d['kdpendidikan']= $this->input->post('kdpendidikan');
		$d['jumlah']= $this->input->post('jumlah');
		$d['jk']= $this->input->post('jk');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('pendidikanpenduduk',$d);
	}
	public function hapus(){
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('pendidikanpenduduk');
	}
	public function getone($id){
		$this->db->where('id',$id);
		return $this->db->get('pendidikanpenduduk');
	}
	public function ambiltahun($tahun){
		$this->db->where('tahun',$tahun);
		return $this->db->get('pendidikanpenduduk');
	}
	public function hitungtahunjk($kd_pendidikan, $jk, $tahun = null){
        if($tahun == null){
            $this->db->select_max('tahun');
            $row = $this->db->get('pendidikanpenduduk')->row_array();
            $tahun = $row['tahun'];
        }
        $this->db->select_sum('jumlah');
        $this->db->where('kdpendidikan', $kd_pendidikan);
        $this->db->where('jk', $jk);
        $this->db->where('tahun', $tahun);
        return $this->db->get('pendidikanpenduduk');
    }
}