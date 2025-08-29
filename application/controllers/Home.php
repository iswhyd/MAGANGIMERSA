<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('template');
		$this->load->library('pagination');
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
      $this->load->model('Mpenduduk');
      $this->load->model('Magama');
      $this->load->model('Magamapenduduk');
      $this->load->model('Mpekerjaan');
      $this->load->model('Mpekerjaanpenduduk');
      $this->load->model('Mpendidikan');
      $this->load->model('Mpendidikanpenduduk');
      $this->load->model('Mjenisbelanja');
      $this->load->model('Mjenisdapat');
      $this->load->model('Mapbdesdapat');
      $this->load->model('Mapbdesbelanja');
      $this->load->model('Mapbdespel');
	}
	public function index(){
      // utama
      $aplikasi= $this->Mwebsite->identitas();
      $app= $aplikasi->row();
      $d['title']= "Beranda";
      $d['ogtitle']= $app->nama_website;
      $d['ogdescription']= $app->nama_website;
      $d['ogimage']= base_url($app->logo_website);
      $d['ogurl']= base_url();

		$d['linkterkait']= $this->Mlinkterkait->data();
		$d['slider']= $this->Mslider->data();
		$d['menu']= $this->Mmenu->menuheader();
		$d['website']= $this->Mwebsite->identitas();
      $d['lastblog']= $this->Mblog->lastblog();
      $d['lastagenda']= $this->Magenda->lastagenda();
      $d['ourservice']= $this->Mourservice->data();
      $d['newfoto']= $this->Mgallery->newfoto();
      $d['newvideo']= $this->Mvideo->newvideo();
      $d['ambiltahun'] = $this->Mpenduduk->ambilterbaru();
      $d['agama']= $this->Magama->data();
      $d['pekerjaan']= $this->Mpekerjaan->data();
      $d['pendidikan']= $this->Mpendidikan->data();
      $d['jenisbelanja']= $this->Mjenisbelanja->data();
      $d['jenisdapat']= $this->Mjenisdapat->data();
      $d['ambilpel']= $this->Mapbdespel->ambiltahun()->row_array();
		$this->template->home('home/index',$d);
	}
//halaman
	public function halaman(){
		$d['linkterkait']= $this->Mlinkterkait->data();
		$d['menu']= $this->Mmenu->menuheader();
		$d['website']= $this->Mwebsite->identitas();
		$d['halaman']= $this->Mhalaman->getone($this->uri->segment(3));

      // utama
      $aplikasi= $this->Mwebsite->identitas();
      $app= $aplikasi->row();
      $gettext= $d['halaman']->row();
      $d['title']= $gettext->judul_halaman;
      $d['ogtitle']= $gettext->judul_halaman;
      $d['ogdescription']= substr(strip_tags($gettext->isi_halaman), 0,200);
      $d['ogimage']= base_url($app->logo_website);
      $d['ogurl']= base_url();

		$this->template->home('home/halaman',$d);
	}
//blog
	public function blog(){
      // utama
      $aplikasi= $this->Mwebsite->identitas();
      $app= $aplikasi->row();
      $d['title']= "Artikel";
      $d['ogtitle']= $app->nama_website;
      $d['ogdescription']= $app->nama_website;
      $d['ogimage']= base_url($app->logo_website);
      $d['ogurl']= base_url();

		$d['linkterkait']= $this->Mlinkterkait->data();
		$d['menu']= $this->Mmenu->menuheader();
		$d['website']= $this->Mwebsite->identitas();
		$d['kategoriblog']= $this->Mkategoriblog->data();

		//konfigurasi pagination
      $config['base_url'] = site_url('home/blog'); //site url
      $config['total_rows'] = $this->Mblog->data()->num_rows(); //total row
      $config['per_page'] = 6;  //show record per halaman
      $config["uri_segment"] = 3;  // uri parameter
      $choice = $config["total_rows"] / $config["per_page"];
      $config["num_links"] = floor($choice);
      // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
      $config['last_link']        = 'Last';
      $config['next_link']        = 'Next';
      $config['prev_link']        = 'Prev';
      $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
      $config['full_tag_close']   = '</ul></nav></div>';
      $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
      $config['num_tag_close']    = '</span></li>';
      $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
      $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
      $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
      $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['prev_tagl_close']  = '</span>Next</li>';
      $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
      $config['first_tagl_close'] = '</span></li>';
      $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['last_tagl_close']  = '</span></li>';
      $this->pagination->initialize($config);
      $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
      //panggil function yang ada pada mmodel. 
      $d['blog'] = $this->Mblog->blogsekolah($config["per_page"], $data['page']);           
      $d['pagination'] = $this->pagination->create_links();
		$this->template->home('home/blog',$d);
	}
	public function kategoriblog(){
		$katblog= $this->Mkategoriblog->getonepar($this->uri->segment(3)); foreach($katblog->result() as $kb);
      // utama
      $aplikasi= $this->Mwebsite->identitas();
      $app= $aplikasi->row();
      $d['title']= $kb->nama_kategoriblog;
      $d['ogtitle']= $kb->nama_kategoriblog.'-'.$app->nama_website;
      $d['ogdescription']= $app->nama_website;
      $d['ogimage']= base_url($app->logo_website);
      $d['ogurl']= base_url();

		$d['linkterkait']= $this->Mlinkterkait->data();
		$d['menu']= $this->Mmenu->menuheader();
		$d['website']= $this->Mwebsite->identitas();
		$d['kategoriblog']= $this->Mkategoriblog->data();

		//konfigurasi pagination
      $config['base_url'] = site_url('home/kategoriblog/'.$this->uri->segment(3)); //site url
      $config['total_rows'] = $this->Mblog->blogdikategori($kb->id_kategoriblog)->num_rows(); //total row
      $config['per_page'] = 6;  //show record per halaman
      $config["uri_segment"] = 4;  // uri parameter
      $choice = $config["total_rows"] / $config["per_page"];
      $config["num_links"] = floor($choice);
      // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
      $config['last_link']        = 'Last';
      $config['next_link']        = 'Next';
      $config['prev_link']        = 'Prev';
      $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
      $config['full_tag_close']   = '</ul></nav></div>';
      $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
      $config['num_tag_close']    = '</span></li>';
      $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
      $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
      $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
      $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['prev_tagl_close']  = '</span>Next</li>';
      $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
      $config['first_tagl_close'] = '</span></li>';
      $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['last_tagl_close']  = '</span></li>';
      $this->pagination->initialize($config);
      $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
      //panggil function yang ada pada mmodel. 
      
      $d['blog'] = $this->Mblog->blogkategori($kb->id_kategoriblog,$config["per_page"], $data['page']);           
      $d['pagination'] = $this->pagination->create_links();
		$this->template->home('home/kategoriblog',$d);
	}
	public function getblog(){
		$d['linkterkait']= $this->Mlinkterkait->data();
		$d['menu']= $this->Mmenu->menuheader();
		$d['website']= $this->Mwebsite->identitas();
      $d['newblog']= $this->Mblog->newblog();
		$d['kategoriblog']= $this->Mkategoriblog->data();
		$d['getblog']= $this->Mblog->getblog($this->uri->segment(3));

      // utama
      $aplikasi= $this->Mwebsite->identitas();
      $app= $aplikasi->row();
      $gettext= $d['getblog']->row();
      $d['title']= $gettext->judul_blog;
      $d['ogtitle']= $gettext->judul_blog;
      $d['ogdescription']= substr(strip_tags($gettext->isi_blog), 0,200);
      $d['ogimage']= base_url($gettext->foto_blog);
      $d['ogurl']= base_url();

		$this->template->home('home/getblog',$d);
	}
//kontak
	public function kontak(){
      // utama
      $aplikasi= $this->Mwebsite->identitas();
      $app= $aplikasi->row();
      $d['title']= "Kontak -".$app->nama_website;
      $d['ogtitle']= "Kontak -".$app->nama_website;
      $d['ogdescription']= $app->nama_website;
      $d['ogimage']= base_url($app->logo_website);
      $d['ogurl']= base_url();

		$d['linkterkait']= $this->Mlinkterkait->data();
		$d['menu']= $this->Mmenu->menuheader();
		$d['website']= $this->Mwebsite->identitas();
		$this->template->home('home/kontak',$d);
	}
//galerifoto
	public function galerifoto(){
      // utama
      $aplikasi= $this->Mwebsite->identitas();
      $app= $aplikasi->row();
      $d['title']= "Galeri Foto -".$app->nama_website;
      $d['ogtitle']= "Galeri Foto -".$app->nama_website;
      $d['ogdescription']= $app->nama_website;
      $d['ogimage']= base_url($app->logo_website);
      $d['ogurl']= base_url();

		$d['linkterkait']= $this->Mlinkterkait->data();
		$d['menu']= $this->Mmenu->menuheader();
		$d['website']= $this->Mwebsite->identitas();
		$d['kategorigallery']= $this->Mkategorigallery->data();
		//konfigurasi pagination
      $config['base_url'] = site_url('home/galerifoto'); //site url
      $config['total_rows'] = $this->Mgallery->data()->num_rows(); //total row
      $config['per_page'] = 8;  //show record per halaman
      $config["uri_segment"] = 3;  // uri parameter
      $choice = $config["total_rows"] / $config["per_page"];
      $config["num_links"] = floor($choice);
      // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
      $config['last_link']        = 'Last';
      $config['next_link']        = 'Next';
      $config['prev_link']        = 'Prev';
      $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
      $config['full_tag_close']   = '</ul></nav></div>';
      $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
      $config['num_tag_close']    = '</span></li>';
      $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
      $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
      $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
      $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['prev_tagl_close']  = '</span>Next</li>';
      $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
      $config['first_tagl_close'] = '</span></li>';
      $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['last_tagl_close']  = '</span></li>';
      $this->pagination->initialize($config);
      $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
      //panggil function yang ada pada mmodel. 
      $d['galerifoto'] = $this->Mgallery->galerifoto($config["per_page"], $data['page']);           
      $d['pagination'] = $this->pagination->create_links();
		$this->template->home('home/galerifoto',$d);
	}
//galerivideo
	public function galerivideo(){
      // utama
      $aplikasi= $this->Mwebsite->identitas();
      $app= $aplikasi->row();
      $d['title']= "Galeri Video -".$app->nama_website;
      $d['ogtitle']= "Galeri Video -".$app->nama_website;
      $d['ogdescription']= $app->nama_website;
      $d['ogimage']= base_url($app->logo_website);
      $d['ogurl']= base_url();

		$d['linkterkait']= $this->Mlinkterkait->data();
		$d['menu']= $this->Mmenu->menuheader();
		$d['website']= $this->Mwebsite->identitas();
		//konfigurasi pagination
      $config['base_url'] = site_url('home/galerivideo'); //site url
      $config['total_rows'] = $this->Mvideo->data()->num_rows(); //total row
      $config['per_page'] = 9;  //show record per halaman
      $config["uri_segment"] = 3;  // uri parameter
      $choice = $config["total_rows"] / $config["per_page"];
      $config["num_links"] = floor($choice);
      // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
      $config['last_link']        = 'Last';
      $config['next_link']        = 'Next';
      $config['prev_link']        = 'Prev';
      $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
      $config['full_tag_close']   = '</ul></nav></div>';
      $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
      $config['num_tag_close']    = '</span></li>';
      $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
      $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
      $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
      $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['prev_tagl_close']  = '</span>Next</li>';
      $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
      $config['first_tagl_close'] = '</span></li>';
      $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['last_tagl_close']  = '</span></li>';
      $this->pagination->initialize($config);
      $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
      //panggil function yang ada pada mmodel. 
      $d['galerivideo'] = $this->Mvideo->galerivideo($config["per_page"], $data['page']);           
      $d['pagination'] = $this->pagination->create_links();
		$this->template->home('home/galerivideo',$d);
	}
//staff
	public function staff(){
      // utama
      $aplikasi= $this->Mwebsite->identitas();
      $app= $aplikasi->row();
      $d['title']= "Staf -".$app->nama_website;
      $d['ogtitle']= "Staf -".$app->nama_website;
      $d['ogdescription']= $app->nama_website;
      $d['ogimage']= base_url($app->logo_website);
      $d['ogurl']= base_url();

		$d['linkterkait']= $this->Mlinkterkait->data();
		$d['menu']= $this->Mmenu->menuheader();
		$d['website']= $this->Mwebsite->identitas();
		//konfigurasi pagination
      $config['base_url'] = site_url('home/staff'); //site url
      $config['total_rows'] = $this->Mstaff->data()->num_rows(); //total row
      $config['per_page'] = 8;  //show record per halaman
      $config["uri_segment"] = 3;  // uri parameter
      $choice = $config["total_rows"] / $config["per_page"];
      $config["num_links"] = floor($choice);
      // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
      $config['last_link']        = 'Last';
      $config['next_link']        = 'Next';
      $config['prev_link']        = 'Prev';
      $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
      $config['full_tag_close']   = '</ul></nav></div>';
      $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
      $config['num_tag_close']    = '</span></li>';
      $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
      $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
      $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
      $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['prev_tagl_close']  = '</span>Next</li>';
      $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
      $config['first_tagl_close'] = '</span></li>';
      $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['last_tagl_close']  = '</span></li>';
      $this->pagination->initialize($config);
      $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
      //panggil function yang ada pada mmodel. 
      $d['staff'] = $this->Mstaff->staff($config["per_page"], $data['page']);           
      $d['pagination'] = $this->pagination->create_links();
		$this->template->home('home/staff',$d);
	}
//agenda
   public function agenda(){
      // utama
      $aplikasi= $this->Mwebsite->identitas();
      $app= $aplikasi->row();
      $d['title']= "Agenda -".$app->nama_website;
      $d['ogtitle']= "Agenda -".$app->nama_website;
      $d['ogdescription']= $app->nama_website;
      $d['ogimage']= base_url($app->logo_website);
      $d['ogurl']= base_url();

      $d['linkterkait']= $this->Mlinkterkait->data();
      $d['menu']= $this->Mmenu->menuheader();
      $d['website']= $this->Mwebsite->identitas();
      //konfigurasi pagination
      $config['base_url'] = site_url('home/agenda'); //site url
      $config['total_rows'] = $this->Magenda->data()->num_rows(); //total row
      $config['per_page'] = 6;  //show record per halaman
      $config["uri_segment"] = 3;  // uri parameter
      $choice = $config["total_rows"] / $config["per_page"];
      $config["num_links"] = floor($choice);
      // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
      $config['last_link']        = 'Last';
      $config['next_link']        = 'Next';
      $config['prev_link']        = 'Prev';
      $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
      $config['full_tag_close']   = '</ul></nav></div>';
      $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
      $config['num_tag_close']    = '</span></li>';
      $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
      $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
      $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
      $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['prev_tagl_close']  = '</span>Next</li>';
      $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
      $config['first_tagl_close'] = '</span></li>';
      $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['last_tagl_close']  = '</span></li>';
      $this->pagination->initialize($config);
      $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
      //panggil function yang ada pada mmodel. 
      $d['agenda'] = $this->Magenda->agenda($config["per_page"], $data['page']);           
      $d['pagination'] = $this->pagination->create_links();
      $this->template->home('home/agenda',$d);
   }
   public function getagenda(){
      $d['linkterkait']= $this->Mlinkterkait->data();
      $d['menu']= $this->Mmenu->menuheader();
      $d['website']= $this->Mwebsite->identitas();
      $d['newagenda']= $this->Magenda->newagenda();
      $d['getagenda']= $this->Magenda->getagenda($this->uri->segment(3));

      // utama
      $aplikasi= $this->Mwebsite->identitas();
      $app= $aplikasi->row();
      $gettext= $d['getagenda']->row();
      $d['title']= $gettext->judul_agenda;
      $d['ogtitle']= $gettext->judul_agenda;
      $d['ogdescription']= substr(strip_tags($gettext->isi_agenda), 0,200);
      $d['ogimage']= base_url($gettext->foto_agenda);
      $d['ogurl']= base_url();

      $this->template->home('home/getagenda',$d);
   }
//download
   public function download(){
      // utama
      $aplikasi= $this->Mwebsite->identitas();
      $app= $aplikasi->row();
      $d['title']= "Download -".$app->nama_website;
      $d['ogtitle']= "Download -".$app->nama_website;
      $d['ogdescription']= $app->nama_website;
      $d['ogimage']= base_url($app->logo_website);
      $d['ogurl']= base_url();

      $d['linkterkait']= $this->Mlinkterkait->data();
      $d['menu']= $this->Mmenu->menuheader();
      $d['website']= $this->Mwebsite->identitas();
      $this->template->home('home/download',$d);
   }
}
