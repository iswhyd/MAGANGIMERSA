<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mstaff');
	}
	public function tambah(){
		$temp = explode(".", $_FILES['filestaff']['name']);
		$new_name = time().'.'.end($temp);
		$config['upload_path'] = './media/staff/';
	   $config['file_name'] = $new_name;
	   $config['allowed_types'] = 'png|jpg';
	   $this->load->library('upload');
	   $this->upload->initialize($config);
	   if (!$this->upload->do_upload('filestaff')){
	   	$this->session->set_flashdata('msg','gagal');
			redirect(base_url('admin/staff'));
	   }
	   else{
	   	$media = $this->upload->data('filestaff');
	   	$foto_staff= 'media/staff/'.$new_name;
	   	$this->Mstaff->tambah($foto_staff);
			$this->session->set_flashdata('msg','simpan');
			redirect(base_url('admin/staff'));
	   }
	}
	public function edit(){
		$temp = explode(".", $_FILES['filestaff']['name']);
		$new_name = time().'.'.end($temp);
		$config['upload_path'] = './media/staff/';
	   $config['file_name'] = $new_name;
	   $config['allowed_types'] = 'png|jpg';
	   $this->load->library('upload');
	   $this->upload->initialize($config);
	   if (!$this->upload->do_upload('filestaff')){
	   	$this->session->set_flashdata('msg','gagal');
			redirect(base_url('admin/staff'));
	   }
	   else{
	   	$media = $this->upload->data('filestaff');
	   	$foto_staff= 'media/staff/'.$new_name;
	   	$staff= $this->Mstaff->getone($this->input->post('id_staff')); foreach($staff->result() as $p);
			unlink('./'.$p->foto_staff);
	   	$this->Mstaff->edit($foto_staff);
			$this->session->set_flashdata('msg','edit');
			redirect(base_url('admin/staff'));
	   }
	}
	public function hapus(){
		$staff= $this->Mstaff->detailstaff(); foreach($staff->result() as $p);
		unlink('./'.$p->foto_staff);
		$this->Mstaff->hapus();
		$this->session->set_flashdata('msg','hapus');
		echo "oke";
		//redirect(base_url('admin/staff'));
	}
	public function offkan(){
		$this->Mstaff->offkan();
		redirect(base_url('admin/staff'));
	}
	public function onkan(){
		$this->Mstaff->onkan();
		redirect(base_url('admin/staff'));
	}
}