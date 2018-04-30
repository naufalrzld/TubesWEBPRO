<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Kelola_toko_model extends CI_Model {
		function create($data){
			//Bentuk Umum: $this->db->insert("nama_table", $data);
			$this->db->insert("barang", $data);
		}
		function get_data($toko_id){
			$query = $this->db->where("toko_id", $toko_id);
			$query = $this->db->get("barang");
			return $query->result_array();
		}
		function update_barang($barang_id, $data) {
			$this->db->where("barang_id", $barang_id);
			$this->db->update("barang", $data);
		}
		function delete($barang_id) {
			$this->db->where("barang_id", $barang_id);
			$this->db->delete("barang");
		}
	}
?>