<?php
class Prestasi extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_pengumuman');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$jum['data']=$this->m_pengumuman->pengumuman();
						$this->load->view('depan/v_prestasi',$jum);
	}

}
