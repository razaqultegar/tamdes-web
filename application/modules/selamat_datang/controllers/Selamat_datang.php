<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selamat_datang extends MX_Controller {

	public function index()
	{
		$this->load->view('selamat_datang/view_selamat_datang.php');
	}
}
