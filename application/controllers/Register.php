<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Register extends CI_Controller {
		function index() {
			$this->load->view("v_register");
		}

		function addNewUser() {
			$email = $this->input->post("email");
			$password = $this->input->post("password");
			$data = array(
				"email" => $email,
				"password" => $password
			);
			print_r($data);
			$this->load->model("register_model");
			$this->register_model->create($data);
			
			//Mengarahkan ke satu halaman
			redirect("login");
		}
	}
?>