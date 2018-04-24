<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Login extends CI_Controller {
		function index() {
			$data['success'] = $this->session->flashdata("success");
			$data['error'] = $this->session->flashdata("error");

			$this->load->view("v_login", $data);
		}

		function do_login() {
			//Ambil POST dengan nama username dan password
			$email = $this->input->post("username");
			$password = $this->input->post("password");
			
			
			$this->load->model("login_model");
			$this->load->model("toko_model");
			$result = $this->login_model->read($email, $password);
			
			//Jika data ditemukan (jumlah data tidak sama dengan nol)
			if (count($result) != 0) {
				//Login Berhasil
				//Set Session untuk user yang login
				//Set session menggunakan sintax dibawah ini
				//$this->session->set_userdata("nama_session", "value")
				$data = array(
					"member_id" => $result->member_id
				);
				$toko = $this->toko_model->cek_toko($data);
				$this->session->set_userdata("has_toko", $toko->toko_id);

				$sessionarray = array(
					"member_id" => $result->member_id,
					"email" => $result->email,
					"nama" => $result->nama,
					"no_tlp" => $result->no_tlp

				);
				$this->session->set_userdata('datauser',$sessionarray);

				$nama = $result->nama;
				$member_id = $result->member_id;
				$this->session->set_userdata("member_id", $member_id);
				$this->session->set_userdata("nama", $nama);
				
				//Kalau login berhasil, arahkan ke Controller Home
				redirect("dashboard");
			} else {
				//Feedback, informasi bahwa login gagal karena username/password salah
				$this->session->set_flashdata("error", "Username atau Password salah!");
				
				//Kalau login gagal, arahkan ke Controller Login
				redirect("login");
			}
		}
		
		function logout(){
			$this->session->sess_destroy();
			redirect("dashboard");
		}
	}
?>