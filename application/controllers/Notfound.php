<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notfound extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('template');
		$this->load->model('Mwebsite');
		$this->load->model('Mmenu');
		$this->load->model('Msubmenu');
		$this->load->model('Mlinkterkait');

	}
	public function index(){
		$d['linkterkait']= $this->Mlinkterkait->data();
		$d['menu']= $this->Mmenu->menuheader();
		$d['website']= $this->Mwebsite->identitas();
		$this->template->home('home/404',$d);
	}
}