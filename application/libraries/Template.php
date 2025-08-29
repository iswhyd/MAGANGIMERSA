<?php
class Template {
	protected $_ci;

	function __construct()
	{
		$this->_ci =&get_instance();
	}

	function admin($template,$data=null)
	{
		$data['_content']=$this->_ci->load->view($template,$data, true);
		$this->_ci->load->view('templateadmin.php',$data);
	}
	function home($template = NULL, $data = NULL){
		$data['_content'] = $this->_ci->load->view($template, $data, TRUE);
        $this->_ci->load->view('templatehome.php', $data);
    }
	function siswabaru($template,$data=null)
	{
		$data['_content']=$this->_ci->load->view($template,$data, true);
		$this->_ci->load->view('templatesiswabaru.php',$data);
	}
}