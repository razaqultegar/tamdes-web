<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selamat_datang extends MX_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_selamat_datang');
	}

	private function data_construct(){
		$data = array();
		return $data;
	}

	public function index() {
		$data = $this->data_construct();
		$this->load->view('view_selamat_datang.php', $data);
	}

	public function add() {
		$tgldatang = $this->input->post('tgldatang');
		$noktp = $this->input->post('noktp');
		$nama = $this->input->post('nama');
		$notel = $this->input->post('notel');
		$alamatasal = $this->input->post('alamatasal');
		$alamattujuan = $this->input->post('alamattujuan');
		$lama = $this->input->post('lama');
		$keperluan = $this->input->post('keperluan');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'tgldatang' => $tgldatang,
			'noktp' => $noktp,
			'nama' => $nama,
			'notel' => $notel,
			'alamatasal' => $alamatasal,
			'alamattujuan' => $alamattujuan,
			'lama' => $lama,
			'keperluan' => $keperluan,
			'keterangan' => $keterangan
		);
		$this->m_selamat_datang->input($data, 'tamdes_buku');
		redirect('selamat_datang/index');
	}
	
}