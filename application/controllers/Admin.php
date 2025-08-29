<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('template');
		$this->load->model('Mwebsite');
		$this->load->model('Mslider');
		$this->load->model('Mkategoriblog');
		$this->load->model('Mblog');
		$this->load->model('Mhalaman');
		$this->load->model('Mkategorigallery');
		$this->load->model('Mgallery');
		$this->load->model('Mvideo');
		$this->load->model('Mstaff');
		$this->load->model('Magenda');
		$this->load->model('Mdownload');
		$this->load->model('Mmenu');
		$this->load->model('Msubmenu');
		$this->load->model('Mlinkterkait');
		$this->load->model('Mourservice');
		$this->load->model('Magama');
		$this->load->model('Mpendidikan');
		$this->load->model('Mpekerjaan');
		$this->load->model('Mjenisbelanja');
		$this->load->model('Mjenisdapat');
		$this->load->model('Mpenduduk');
		$this->load->model('Magamapenduduk');
		$this->load->model('Mpekerjaanpenduduk');
		$this->load->model('Mpendidikanpenduduk');
		$this->load->model('Mapbdesdapat');
		$this->load->model('Mapbdesbelanja');
		$this->load->model('Mapbdespel');
		$this->load->model('Mlogin');
	}
	public function index(){
		$d['website']= $this->Mwebsite->identitas();
		//$this->template->admin('admin/index',$d);
		$this->template->admin('admin/website/identitas',$d);
	}
	public function akunsaya(){
		$d['website']= $this->Mwebsite->identitas();
		$this->template->admin('admin/setting/akun',$d);
	}
	public function updateakun(){
		$id_admin= $this->session->userdata('id_admin');
		$password= $this->input->post('password_admin');
		if($password!=""){
			$this->Mlogin->updatepass($id_admin);
		}
		else{
			$this->Mlogin->updatebiasa($id_admin);
		}
		$this->session->set_flashdata('msg','edit');
		redirect(base_url('admin/akunsaya'));
	}
	public function logout(){
		$this->session->unset_userdata('id_admin');
		$this->session->unset_userdata('nama_admin');
		redirect(base_url());
	}
//website
	public function website(){
		$d['website']= $this->Mwebsite->identitas();
		$this->template->admin('admin/website/identitas',$d);
	}
//slider
	public function slider(){
		$d['website']= $this->Mwebsite->identitas();
		$d['slider']= $this->Mslider->data();
		$this->template->admin('admin/slider/data',$d);
	}
	public function tambahslider(){
		include APPPATH.'views/admin/slider/tambah.php';
	}
	public function editslider(){
		$slider= $this->Mslider->detailslider();
		include APPPATH.'views/admin/slider/edit.php';
	}
//kategoriblog
	public function kategoriblog(){
		$d['website']= $this->Mwebsite->identitas();
		$d['kategoriblog']= $this->Mkategoriblog->data();
		$this->template->admin('admin/kategoriblog/data',$d);
	}
	public function tambahkategoriblog(){
		include APPPATH.'views/admin/kategoriblog/tambah.php';
	}
	public function editkategoriblog(){
		$kategoriblog= $this->Mkategoriblog->detailkategoriblog();
		include APPPATH.'views/admin/kategoriblog/edit.php';
	}
//blog
	public function inputblog(){
		$d['website']= $this->Mwebsite->identitas();
		$d['kategoriblog']= $this->Mkategoriblog->data();
		$this->template->admin('admin/blog/inputblog',$d);
	}
	public function blog(){
		$d['website']= $this->Mwebsite->identitas();
		$d['blog']= $this->Mblog->data();
		$this->template->admin('admin/blog/data',$d);
	}
	public function editblog(){
		$d['website']= $this->Mwebsite->identitas();
		$d['kategoriblog']= $this->Mkategoriblog->data();
		$d['blog']= $this->Mblog->detailblog();
		$this->template->admin('admin/blog/editblog',$d);
	}
//halaman
	public function halaman(){
		$d['website']= $this->Mwebsite->identitas();
		$d['halaman']= $this->Mhalaman->data();
		$this->template->admin('admin/halaman/data',$d);
	}
	public function inputhalaman(){
		$d['website']= $this->Mwebsite->identitas();
		$this->template->admin('admin/halaman/inputhalaman',$d);
	}
	public function edithalaman(){
		$d['website']= $this->Mwebsite->identitas();
		$d['halaman']= $this->Mhalaman->detailhalaman();
		$this->template->admin('admin/halaman/edithalaman',$d);
	}
//kategorigallery
	public function kategorigallery(){
		$d['website']= $this->Mwebsite->identitas();
		$d['kategorigallery']= $this->Mkategorigallery->data();
		$this->template->admin('admin/kategorigallery/data',$d);
	}
	public function tambahkategorigallery(){
		include APPPATH.'views/admin/kategorigallery/tambah.php';
	}
	public function editkategorigallery(){
		$kategorigallery= $this->Mkategorigallery->detailkategorigallery();
		include APPPATH.'views/admin/kategorigallery/edit.php';
	}
//gallery
	public function gallery(){
		$d['website']= $this->Mwebsite->identitas();
		$d['gallery']= $this->Mgallery->data();
		$this->template->admin('admin/gallery/data',$d);
	}
	public function tambahgallery(){
		$kategorigallery= $this->Mkategorigallery->data();
		include APPPATH.'views/admin/gallery/tambah.php';
	}
	public function editgallery(){
		$gallery= $this->Mgallery->detailgallery();
		include APPPATH.'views/admin/gallery/edit.php';
	}
//video
	public function video(){
		$d['website']= $this->Mwebsite->identitas();
		$d['video']= $this->Mvideo->data();
		$this->template->admin('admin/video/data',$d);
	}
	public function tambahvideo(){
		include APPPATH.'views/admin/video/tambah.php';
	}
	public function editvideo(){
		$video= $this->Mvideo->detailvideo();
		include APPPATH.'views/admin/video/edit.php';
	}
//staff
	public function staff(){
		$d['website']= $this->Mwebsite->identitas();
		$d['staff']= $this->Mstaff->data();
		$this->template->admin('admin/staff/data',$d);
	}
	public function tambahstaff(){
		include APPPATH.'views/admin/staff/tambah.php';
	}
	public function editstaff(){
		$staff= $this->Mstaff->detailstaff();
		include APPPATH.'views/admin/staff/edit.php';
	}
//agenda
	public function inputagenda(){
		$d['website']= $this->Mwebsite->identitas();
		$this->template->admin('admin/agenda/inputagenda',$d);
	}
	public function agenda(){
		$d['website']= $this->Mwebsite->identitas();
		$d['agenda']= $this->Magenda->data();
		$this->template->admin('admin/agenda/data',$d);
	}
	public function editagenda(){
		$d['website']= $this->Mwebsite->identitas();
		$d['agenda']= $this->Magenda->detailagenda();
		$this->template->admin('admin/agenda/editagenda',$d);
	}
//download
	public function download(){
		$d['website']= $this->Mwebsite->identitas();
		$d['download']= $this->Mdownload->data();
		$this->template->admin('admin/download/data',$d);
	}
	public function tambahdownload(){
		include APPPATH.'views/admin/download/tambah.php';
	}
	public function editdownload(){
		$download= $this->Mdownload->detaildownload();
		include APPPATH.'views/admin/download/edit.php';
	}
//menu
	public function menu(){
		$d['website']= $this->Mwebsite->identitas();
		$this->template->admin('admin/menu/data',$d);
	}
	public function tambahmenu(){
		$halaman= $this->Mhalaman->data();
		$blog= $this->Mblog->data();
		include APPPATH.'views/admin/menu/tambah.php';
	}
	public function editmenu(){
		$menu= $this->Mmenu->detailmenu();
		include APPPATH.'views/admin/menu/edit.php';
	}
//submenu
	public function submenu(){
		$d['website']= $this->Mwebsite->identitas();
		$d['menu']= $this->Mmenu->getone($this->uri->segment(3));
		$this->template->admin('admin/submenu/data',$d);
	}
	public function tambahsubmenu(){
		$halaman= $this->Mhalaman->data();
		$blog= $this->Mblog->data();
		include APPPATH.'views/admin/submenu/tambah.php';
	}
	public function editsubmenu(){
		$submenu= $this->Msubmenu->detailsubmenu();
		include APPPATH.'views/admin/submenu/edit.php';
	}
//linkterkait
	public function linkterkait(){
		$d['website']= $this->Mwebsite->identitas();
		$d['linkterkait']= $this->Mlinkterkait->data();
		$this->template->admin('admin/linkterkait/data',$d);
	}
	public function tambahlinkterkait(){
		include APPPATH.'views/admin/linkterkait/tambah.php';
	}
	public function editlinkterkait(){
		$linkterkait= $this->Mlinkterkait->detaillinkterkait();
		include APPPATH.'views/admin/linkterkait/edit.php';
	}
//ourservice
	public function ourservice(){
		$d['website']= $this->Mwebsite->identitas();
		$d['ourservice']= $this->Mourservice->data();
		$this->template->admin('admin/ourservice/data',$d);
	}
	public function tambahourservice(){
		include APPPATH.'views/admin/ourservice/tambah.php';
	}
	public function editourservice(){
		$ourservice= $this->Mourservice->detailourservice();
		include APPPATH.'views/admin/ourservice/edit.php';
	}
//agama
	public function agama(){
		$d['website']= $this->Mwebsite->identitas();
		$d['agama']= $this->Magama->data();
		$this->template->admin('admin/agama/data',$d);
	}
	public function tambahagama(){
		include APPPATH.'views/admin/agama/tambah.php';
	}
	public function editagama(){
		$agama= $this->Magama->detailagama();
		include APPPATH.'views/admin/agama/edit.php';
	}
//pendidikan
	public function pendidikan(){
		$d['website']= $this->Mwebsite->identitas();
		$d['pendidikan']= $this->Mpendidikan->data();
		$this->template->admin('admin/pendidikan/data',$d);
	}
	public function tambahpendidikan(){
		include APPPATH.'views/admin/pendidikan/tambah.php';
	}
	public function editpendidikan(){
		$pendidikan= $this->Mpendidikan->detailpendidikan();
		include APPPATH.'views/admin/pendidikan/edit.php';
	}
//pekerjaan
	public function pekerjaan(){
		$d['website']= $this->Mwebsite->identitas();
		$d['pekerjaan']= $this->Mpekerjaan->data();
		$this->template->admin('admin/pekerjaan/data',$d);
	}
	public function tambahpekerjaan(){
		include APPPATH.'views/admin/pekerjaan/tambah.php';
	}
	public function editpekerjaan(){
		$pekerjaan= $this->Mpekerjaan->detailpekerjaan();
		include APPPATH.'views/admin/pekerjaan/edit.php';
	}
//jenisbelanja
	public function jenisbelanja(){
		$d['website']= $this->Mwebsite->identitas();
		$d['jenisbelanja']= $this->Mjenisbelanja->data();
		$this->template->admin('admin/jenisbelanja/data',$d);
	}
	public function tambahjenisbelanja(){
		include APPPATH.'views/admin/jenisbelanja/tambah.php';
	}
	public function editjenisbelanja(){
		$jenisbelanja= $this->Mjenisbelanja->detailjenisbelanja();
		include APPPATH.'views/admin/jenisbelanja/edit.php';
	}
//jenisdapat
	public function jenisdapat(){
		$d['website']= $this->Mwebsite->identitas();
		$d['jenisdapat']= $this->Mjenisdapat->data();
		$this->template->admin('admin/jenisdapat/data',$d);
	}
	public function tambahjenisdapat(){
		include APPPATH.'views/admin/jenisdapat/tambah.php';
	}
	public function editjenisdapat(){
		$jenisdapat= $this->Mjenisdapat->detailjenisdapat();
		include APPPATH.'views/admin/jenisdapat/edit.php';
	}
//penduduk
	public function penduduk(){
		$d['website']= $this->Mwebsite->identitas();
		$d['penduduk']= $this->Mpenduduk->data();
		$this->template->admin('admin/penduduk/data',$d);
	}
	public function tambahpenduduk(){
		include APPPATH.'views/admin/penduduk/tambah.php';
	}
	public function editpenduduk(){
		$penduduk= $this->Mpenduduk->detailpenduduk();
		include APPPATH.'views/admin/penduduk/edit.php';
	}
//agamapenduduk
	public function agamapenduduk(){
		$d['website']= $this->Mwebsite->identitas();
		$d['agamapenduduk']= $this->Magamapenduduk->data();
		$this->template->admin('admin/agamapenduduk/data',$d);
	}
	public function tambahagamapenduduk(){
		$agama= $this->Magama->data();
		include APPPATH.'views/admin/agamapenduduk/tambah.php';
	}
	public function editagamapenduduk(){
		$agama= $this->Magama->data();
		$agamapenduduk= $this->Magamapenduduk->detailagamapenduduk();
		include APPPATH.'views/admin/agamapenduduk/edit.php';
	}
//pekerjaanpenduduk
	public function pekerjaanpenduduk(){
		$d['website']= $this->Mwebsite->identitas();
		$d['pekerjaanpenduduk']= $this->Mpekerjaanpenduduk->data();
		$this->template->admin('admin/pekerjaanpenduduk/data',$d);
	}
	public function tambahpekerjaanpenduduk(){
		$pekerjaan= $this->Mpekerjaan->data();
		include APPPATH.'views/admin/pekerjaanpenduduk/tambah.php';
	}
	public function editpekerjaanpenduduk(){
		$pekerjaan= $this->Mpekerjaan->data();
		$pekerjaanpenduduk= $this->Mpekerjaanpenduduk->detailpekerjaanpenduduk();
		include APPPATH.'views/admin/pekerjaanpenduduk/edit.php';
	}
//pendidikanpenduduk
	public function pendidikanpenduduk(){
		$d['website']= $this->Mwebsite->identitas();
		$d['pendidikanpenduduk']= $this->Mpendidikanpenduduk->data();
		$this->template->admin('admin/pendidikanpenduduk/data',$d);
	}
	public function tambahpendidikanpenduduk(){
		$pendidikan= $this->Mpendidikan->data();
		include APPPATH.'views/admin/pendidikanpenduduk/tambah.php';
	}
	public function editpendidikanpenduduk(){
		$pendidikan= $this->Mpendidikan->data();
		$pendidikanpenduduk= $this->Mpendidikanpenduduk->detailpendidikanpenduduk();
		include APPPATH.'views/admin/pendidikanpenduduk/edit.php';
	}
//apbdesdapat
	public function apbdesdapat(){
		$d['website']= $this->Mwebsite->identitas();
		$d['apbdesdapat']= $this->Mapbdesdapat->data();
		$this->template->admin('admin/apbdesdapat/data',$d);
	}
	public function tambahapbdesdapat(){
		$jenisdapat= $this->Mjenisdapat->data();
		include APPPATH.'views/admin/apbdesdapat/tambah.php';
	}
	public function editapbdesdapat(){
		$jenisdapat= $this->Mjenisdapat->data();
		$apbdesdapat= $this->Mapbdesdapat->detailapbdesdapat();
		include APPPATH.'views/admin/apbdesdapat/edit.php';
	}
//apbdesbelanja
	public function apbdesbelanja(){
		$d['website']= $this->Mwebsite->identitas();
		$d['apbdesbelanja']= $this->Mapbdesbelanja->data();
		$this->template->admin('admin/apbdesbelanja/data',$d);
	}
	public function tambahapbdesbelanja(){
		$jenisbelanja= $this->Mjenisbelanja->data();
		include APPPATH.'views/admin/apbdesbelanja/tambah.php';
	}
	public function editapbdesbelanja(){
		$jenisbelanja= $this->Mjenisbelanja->data();
		$apbdesbelanja= $this->Mapbdesbelanja->detailapbdesbelanja();
		include APPPATH.'views/admin/apbdesbelanja/edit.php';
	}
//apbdespel
	public function apbdespel(){
		$d['website']= $this->Mwebsite->identitas();
		$d['apbdespel']= $this->Mapbdespel->data();
		$this->template->admin('admin/apbdespel/data',$d);
	}
	public function tambahapbdespel(){
		include APPPATH.'views/admin/apbdespel/tambah.php';
	}
	public function editapbdespel(){
		$apbdespel= $this->Mapbdespel->detailapbdespel();
		include APPPATH.'views/admin/apbdespel/edit.php';
	}
}