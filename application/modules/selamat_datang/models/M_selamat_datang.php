<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_selamat_datang extends CI_Model{
  
	function view() {
		return $this->db->get('tb_buku');
	}
 
	function input($data, $table) {
		$this->db->insert($table, $data);
  }
  
}