<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mkirim extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function tesemail($config,$subjek,$kepada,$isi,$dari,$atasnama){
		$this->email->initialize($config);
		$this->email->subject($subjek);
		$this->email->to($kepada);
		$this->email->message($isi);
		$this->email->from($dari,$atasnama);
		$this->email->send();
		echo $this->email->print_debugger();
	}
	public function kirimuserpass($config,$subjek,$kepada,$isi,$dari,$atasnama){
		$this->email->initialize($config);
		$this->email->subject($subjek);
		$this->email->to($kepada);
		$this->email->message($isi);
		$this->email->from($dari,$atasnama);
		if($this->email->send()){
			$status= "sukses";
		}
		else{
			$status= "gagal";
		}
		return $status;
	}
	public function kirimditerima($config,$subjek,$kepada,$isi,$dari,$atasnama){
		$this->email->initialize($config);
		$this->email->subject($subjek);
		$this->email->to($kepada);
		$this->email->message($isi);
		$this->email->from($dari,$atasnama);
		if(!$this->email->send()){
			$status= "gagal";
		}
		else{
			$status= "sukses";
		}
		return $status;
	}
}