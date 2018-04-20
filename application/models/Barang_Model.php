<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Barang_Model extends CI_Model {
		public function get_barang() {
			return $this->db->get('barang')->result_array();
		}

		public function detail_barang($barang_id){
			$this->db->where('barang_id', $barang_id);
			return $this->db->get('barang')->row();	
		}
	}