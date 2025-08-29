<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class download extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mdownload');
		$this->load->helper('download');
	}
	public function tambah(){
		$temp = explode(".", $_FILES['filedownload']['name']);
		$new_name = time().'.'.end($temp);
		$config['upload_path'] = './media/download/';
	   $config['file_name'] = $new_name;
	   $config['allowed_types'] = 'png|jpg|pdf|doc|docx|xls|xlsx|jpeg';
	   $this->load->library('upload');
	   $this->upload->initialize($config);
	   if (!$this->upload->do_upload('filedownload')){
	   	$this->session->set_flashdata('msg','gagal');
			redirect(base_url('admin/download'));
	   }
	   else{
	   	$media = $this->upload->data('filedownload');
	   	$file_download= 'media/download/'.$new_name;
	   	$this->Mdownload->tambah($file_download);
			$this->session->set_flashdata('msg','simpan');
			redirect(base_url('admin/download'));
	   }
	}
	public function hapus(){
		$download= $this->Mdownload->detaildownload(); foreach($download->result() as $p);
		unlink('./'.$p->file_download);
		$this->Mdownload->hapus();
		$this->session->set_flashdata('msg','hapus');
		echo "oke";
		//redirect(base_url('admin/download'));
	}
//frontend
	public function getfile(){
		$download= $this->Mdownload->getone($this->uri->segment(3)); foreach($download->result() as $do);
		$didownload= $do->didownload+1;
		$this->Mdownload->didownload($this->uri->segment(3),$didownload);
		force_download('./'.$do->file_download, NULL);
	}
//serverside
	public function get_data_download()
	{
		$list = $this->Mdownload->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $field) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $field->judul_download;
			$row[] = tglwaktu($field->tglinput_download);
			$row[] = $field->didownload.' Kali';
			$row[] = '
				<a target="_blank" href="'.base_url('download/getfile/'.$field->id_download).'" class="btn btn-success btn-sm"><i class="fa fa-download"></i> Download</a>
			';
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->Mdownload->count_all(),
			"recordsFiltered" => $this->Mdownload->count_filtered(),
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
	}
}