<?php
class Pengurus extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_guru');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$jum['data']=$this->m_guru->guru();
						$this->load->view('depan/v_pengurus',$jum);
	}

}
