<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Login_Model extends CI_Model {
		function read($where="") {
			if(!empty($where)) $this->db->where($where);
			
			$query = $this->db->get("login");
			
			if($query AND $query->num_rows() != 0) {
				return $query->result();
			} else {
				return array();
			}
		}
	}	
?>