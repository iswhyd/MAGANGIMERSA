<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Mlogin');
		$this->load->model('Mwebsite');
	}
	public function index(){
		$d['website']= $this->Mwebsite->identitas();
		$this->load->view('admin/login',$d);
	}
	public function login(){
		$cek= $this->Mlogin->login();
		if($cek->num_rows()>0){
			foreach($cek->result() as $r);
			$this->session->set_userdata('nama_admin',$r->nama_admin);
			$this->session->set_userdata('id_admin',$r->id_admin);
			echo 'admin';
		}
		else{
			echo "gagal";
		}
	}
}
