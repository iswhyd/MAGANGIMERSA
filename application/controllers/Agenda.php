<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Magenda');
	}
	public function tambah(){
		$temp = explode(".", $_FILES['fileagenda']['name']);
		$new_name = time().'.'.end($temp);
		$config['upload_path'] = './media/agenda/';
	   $config['file_name'] = $new_name;
	   $config['allowed_types'] = 'png|jpg';
	   $this->load->library('upload');
	   $this->upload->initialize($config);
	   if (!$this->upload->do_upload('fileagenda')){
	   	$this->session->set_flashdata('msg','gagal');
			redirect(base_url('admin/inputagenda'));
	   }
	   else{
	   	$media = $this->upload->data('fileagenda');
	   	$foto_agenda= 'media/agenda/'.$new_name;
	   	$this->Magenda->tambah($foto_agenda);
			$this->session->set_flashdata('msg','simpan');
			redirect(base_url('admin/inputagenda'));
	   }
	}
	public function edit(){
		$id_agenda= $this->uri->segment(3);
		$temp = explode(".", $_FILES['fileagenda']['name']);
		$new_name = time().'.'.end($temp);
		$config['upload_path'] = './media/agenda/';
	   $config['file_name'] = $new_name;
	   $config['allowed_types'] = 'png|jpg';
	   $this->load->library('upload');
	   $this->upload->initialize($config);
	   if (!$this->upload->do_upload('fileagenda')){
	   	$foto_agenda= "";
	   	$this->Magenda->edit($foto_agenda);
			$this->session->set_flashdata('msg','edit');
			redirect(base_url('admin/editagenda/'.$id_agenda));
	   }
	   else{
	   	$media = $this->upload->data('fileagenda');
	   	$agenda= $this->Magenda->detailagenda(); foreach($agenda->result() as $p);
			unlink('./'.$p->foto_agenda);
	   	$foto_agenda= 'media/agenda/'.$new_name;
	   	$this->Magenda->edit($foto_agenda);
			$this->session->set_flashdata('msg','edit');
			redirect(base_url('admin/editagenda/'.$id_agenda));
	   }
	}
	public function hapus(){
		$agenda= $this->Magenda->detailagenda(); foreach($agenda->result() as $p);
		unlink('./'.$p->foto_agenda);
		$this->Magenda->hapus();
		$this->session->set_flashdata('msg','hapus');
		echo "oke";
		//redirect(base_url('admin/agenda'));
	}
	public function offkan(){
		$this->Magenda->offkan();
		redirect(base_url('admin/agenda'));
	}
	public function onkan(){
		$this->Magenda->onkan();
		redirect(base_url('admin/agenda'));
	}
}