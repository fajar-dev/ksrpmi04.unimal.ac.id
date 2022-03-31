<?php
class Prestasi extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_pengumuman');
		$this->load->library('upload');
	}


	function index(){
		if($this->session->userdata('akses')=='1'){
			$x['data']=$this->m_pengumuman->get_all_pengumuman();
			$this->load->view('admin/v_prestasi',$x);
		}else{
			redirect('admin/dashboard');
		}
	}

	function simpan_prestasi(){
		$judul=strip_tags($this->input->post('xjudul'));
		$deskripsi=$this->input->post('xdeskripsi');
		$this->m_pengumuman->simpan_pengumuman($judul,$deskripsi);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/prestasi');
	}

	function update_prestasi(){
		$kode=strip_tags($this->input->post('kode'));
		$judul=strip_tags($this->input->post('xjudul'));
		$deskripsi=$this->input->post('xdeskripsi');
		$this->m_pengumuman->update_pengumuman($kode,$judul,$deskripsi);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/prestasi');
	}
	function hapus_prestasi(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_pengumuman->hapus_pengumuman($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/prestasi');
	}

}