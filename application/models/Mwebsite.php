<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mwebsite extends CI_Model {
	public function identitas(){
		return $this->db->get('website');
	}
	public function edit(){
		$d['nama_website']= $this->input->post('nama_website');
		$d['nama_email']= $this->input->post('nama_email');
		$d['protocol_email']= $this->input->post('protocol_email');
		$d['smtp_host_email']= $this->input->post('smtp_host_email');
		$d['smtp_user_email']= $this->input->post('smtp_user_email');
		$d['smtp_pass_email']= $this->input->post('smtp_pass_email');
		$d['smtp_port_email']= $this->input->post('smtp_port_email');
		$d['alamat_desa']= $this->input->post('alamat_desa');
		$d['tlp_desa']= $this->input->post('tlp_desa');
		$d['email_desa']= $this->input->post('email_desa');
		$d['facebook']= $this->input->post('facebook');
		$d['twitter']= $this->input->post('twitter');
		$d['youtube']= $this->input->post('youtube');
		$d['instagram']= $this->input->post('instagram');
		$this->db->update('website',$d);
	}
	public function editlogo($logo_website){
		$d['logo_website']= $logo_website;
		$this->db->update('website',$d);
	}
	public function sambutan($foto_kepsek){
		$d['sambutan_kades']= $this->input->post('sambutan_kades');
		if($foto_kepsek!=""){
			$d['foto_kepsek']= $foto_kepsek;
		}
		$this->db->update('website',$d);
	}
	public function editlogomenu($logo_menu){
		$d['logo_menu']= $logo_menu;
		$this->db->update('website',$d);
	}
	public function infosiswabaru(){
		$d['info_siswabaru']= $this->input->post('info_siswabaru');
		$this->db->update('website',$d);
	}
}