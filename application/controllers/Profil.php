<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profil extends CI_Controller {
	public function index() {
			$this->load->view("v_header");
			$this->load->view("v_profil");
			$this->load->view("v_footer");
	}

	function veditprofil() {
			$this->load->view("v_header");
			$this->load->view("v_editprofil");
	}
		function editprofil() {
			$p_member_id = $this->input->post("p_member_id");
			$p_namalengkap = $this->input->post("p_namalengkap");
			$p_email = $this->input->post("p_email");
			$p_no_tlp = $this->input->post("p_no_tlp");
			$p_alamat = $this->input->post("p_alamat");

			
			$config['upload_path']          = './assets/image/uploads/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 10000;
	 
			$this->load->library('upload', $config);
	 
			if ( ! $this->upload->do_upload('berkas')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view("v_header");
				$this->load->view("v_editprofil");
			}else{

	        	$upload_data = $this->upload->data();
	        	$image = $upload_data["file_name"];

	            $data = array(
	            	"member_id" => $p_member_id,
					"nama" => $p_namalengkap,
					"email" => $p_email,
					"no_tlp" => $p_no_tlp,
					"alamat" => $p_alamat,
					"foto" => $image
				);

				$this->load->model("m_edit_profil");
				$this->m_edit_profil->edit($p_member_id, $data);
				$update = array(
					"member_id" => $p_member_id,
					"email" => $p_email,
					"nama" => $p_namalengkap,
					"no_tlp" => $p_no_tlp,
					"alamat" => $p_alamat,
					"foto" => $image

				);
				$this->session->set_userdata('datauser',$update);
				$user_data = $this->session->userdata('datauser');
				echo $user_data['alamat'];
				redirect('profil');
	        }
		}
}
