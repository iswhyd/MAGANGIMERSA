<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kirim extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->library('email');
		$this->load->model('Mwebsite');
		$this->load->model('Mkirim');
	}
//email
	public function tesemail(){
		$website= $this->Mwebsite->identitas(); foreach($website->result() as $res);
		$config['mailtype'] = 'html'; 
		$config['protocol'] = $res->protocol_email;
		$config['smtp_host'] = $res->smtp_host_email;
		$config['smtp_user'] = $res->smtp_user_email;
		$config['smtp_pass'] = $res->smtp_pass_email;
		$config['smtp_port'] = $res->smtp_port_email;
		$config['wordwrap'] = TRUE;
		$subjek= 'Tes Email';
		$kepada= 'rinookta1427@gmail.com';
		$isi= 'Tes Email';
		$dari= $res->smtp_user_email;
		$atasnama= $res->nama_email;
		$this->Mkirim->tesemail($config,$subjek,$kepada,$isi,$dari,$atasnama);
	}
	public function index(){
		echo "aassa";
	}
}