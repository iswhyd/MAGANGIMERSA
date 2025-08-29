<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mblog extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function data(){
		$this->db->join('kategoriblog','kategoriblog.id_kategoriblog=blog.id_kategoriblog','left');
		$this->db->order_by('blog.tglinput_blog','desc');
		return $this->db->get('blog');
	}
	public function tambah($foto_blog){
		$d['id_kategoriblog']= $this->input->post('id_kategoriblog');
		$d['judul_blog']= $this->input->post('judul_blog');
		$d['isi_blog']= $this->input->post('isi_blog');
		$d['foto_blog']= $foto_blog;
		$d['tglinput_blog']= date('Y-m-d H:i:s');
		$this->db->insert('blog',$d);
	}
	public function detailblog(){
		$this->db->where('id_blog',$this->uri->segment(3));
		return $this->db->get('blog');
	}
	public function edit($foto_blog){
		$d['id_kategoriblog']= $this->input->post('id_kategoriblog');
		$d['judul_blog']= $this->input->post('judul_blog');
		$d['isi_blog']= $this->input->post('isi_blog');
		if($foto_blog!=""){
			$d['foto_blog']= $foto_blog;
		}
		$d['tglinput_blog']= date('Y-m-d H:i:s');
		$this->db->where('id_blog',$this->uri->segment(3));
		$this->db->update('blog',$d);
	}
	public function hapus(){
		$this->db->where('id_blog',$this->uri->segment(3));
		$this->db->delete('blog');
	}
	public function getone($id_blog){
		$this->db->where('id_blog',$id_blog);
		return $this->db->get('blog');
	}
//frontend
	public function blogsekolah($limit, $start){
		$this->db->join('kategoriblog','kategoriblog.id_kategoriblog=blog.id_kategoriblog','left');
		$this->db->order_by('blog.tglinput_blog','desc');
		return $this->db->get('blog',$limit, $start);
	}
	public function blogdikategori($id_kategoriblog){
		$this->db->where('id_kategoriblog',$id_kategoriblog);
		return $this->db->get('blog');
	}
	public function getblog($id_blog){
		$this->db->join('kategoriblog','kategoriblog.id_kategoriblog=blog.id_kategoriblog','left');
		$this->db->where('blog.id_blog',$id_blog);
		return $this->db->get('blog');
	}
	public function blogkategori($id_kategoriblog, $limit, $start){
		$this->db->join('kategoriblog','kategoriblog.id_kategoriblog=blog.id_kategoriblog','left');
		$this->db->order_by('blog.tglinput_blog','desc');
		$this->db->where('blog.id_kategoriblog',$id_kategoriblog);
		return $this->db->get('blog',$limit, $start);
	}
	public function newblog(){
		$this->db->join('kategoriblog','kategoriblog.id_kategoriblog=blog.id_kategoriblog','left');
		$this->db->limit(7);
		$this->db->order_by('blog.tglinput_blog','desc');
		return $this->db->get('blog');
	}
	public function lastblog(){
		$this->db->join('kategoriblog','kategoriblog.id_kategoriblog=blog.id_kategoriblog','left');
		$this->db->limit(4);
		$this->db->order_by('blog.tglinput_blog','desc');
		return $this->db->get('blog');
	}
}