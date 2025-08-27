<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {
	public function login(){
		$this->db->where('username_admin',$this->input->post('username'));
		$this->db->where('password_admin',md5($this->input->post('password')));
		return $this->db->get('admin');
	}
	public function getoneadmin($id_admin){
		$this->db->where('id_admin', $id_admin);
		return $this->db->get('admin');
	}
	public function updatepass($id_admin){
		$data['nama_admin']= $this->input->post('nama_admin');
		$data['username_admin']= $this->input->post('username_admin');
		$data['password_admin']= md5($this->input->post('password_admin'));
		$this->db->where('id_admin', $id_admin);
		$this->db->update('admin', $data);
	}
	public function updatebiasa($id_admin){
		$data['nama_admin']= $this->input->post('nama_admin');
		$data['username_admin']= $this->input->post('username_admin');
		$this->db->where('id_admin', $id_admin);
		$this->db->update('admin', $data);
	}
}
