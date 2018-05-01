<?php
	class Kelola_toko extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('kelola_toko_model');
		}
		function index() {
			$toko_id =  $this->session->userdata("has_toko");

			$data["dataBrg"] = $this->kelola_toko_model->get_data($toko_id);
			$data["toko"] = $this->kelola_toko_model->get_toko($toko_id);
			$this->load->view("v_header");
			$this->load->view("v_kelola_toko", $data);
			$this->load->view('v_footer');
		}

		function tambah_barang() {
			$this->load->view('v_header');
			$this->load->view("v_tambah_barang");
			$this->load->view('v_footer');
		}

		function buat_barang(){
			$toko_id = $this->session->userdata("has_toko");
			$nama = $this->input->post("name");
			$harga = $this->input->post("harga");
			$informasi = $this->input->post("informasi");
			$spec = $this->input->post("spec");
			$desc = $this->input->post("desc");
			$catatan = $this->input->post("catatan");

			$config['upload_path']          = './assets/image/uploads/';
	        $config['allowed_types']        = 'jpg|png';
	        $config['max_size']             = 10000;

	        $this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('userfile')) {
		        $error = array('error' => $this->upload->display_errors());

		        $this->load->view('v_tambah_barang', $error);
	        } else {
	        	$upload_data = $this->upload->data();
	        	$image = $upload_data["file_name"];

	            $data = array(
					"toko_id" => $toko_id,
					"images" => $image,
					"nama_barang" => $nama,
					"harga" => $harga,
					"informasi" => $informasi,
					"spesifikasi" => $spec,
					"deskripsi_b" => $desc,
					"catatan" => $catatan
				);
				$this->kelola_toko_model->create($data);
				redirect('kelola_toko');
	        }
		}

		function edit_barang() {
			$kode_barang = $this->input->post("kode_barang");
			$toko_id = $this->session->userdata("has_toko");
			$nama = $this->input->post("nama_barang");
			$harga = $this->input->post("harga");
			$informasi = $this->input->post("informasi");
			$spec = $this->input->post("spec");
			$desc = $this->input->post("desc");
			$catatan = $this->input->post("catatan");

			$config['upload_path']          = './assets/image/uploads/';
	        $config['allowed_types']        = 'jpg|png';
	        $config['max_size']             = 10000;

			$this->load->library('upload', $config);

	        if ($this->upload->do_upload('userfile')) {
		        $upload_data = $this->upload->data();
	        	$image = $upload_data["file_name"];
		        $data = array(
	            	"barang_id" => $kode_barang,
					"toko_id" => $toko_id,
					"images" => $image,
					"nama_barang" => $nama,
					"harga" => $harga,
					"informasi" => $informasi,
					"spesifikasi" => $spec,
					"deskripsi" => $desc,
					"catatan" => $catatan
				);
	        } else {
	        	$data = array(
	            	"barang_id" => $kode_barang,
					"toko_id" => $toko_id,
					"nama_barang" => $nama,
					"harga" => $harga,
					"informasi" => $informasi,
					"spesifikasi" => $spec,
					"deskripsi" => $desc,
					"catatan" => $catatan
				);        	
	        }
	        $this->kelola_toko_model->update_barang($kode_barang, $data);
			redirect('kelola_toko');
		}

		function edit_toko() {
			$toko_id = $this->session->userdata("has_toko");
			$nama = $this->input->post("nama_toko");
			$desc = $this->input->post("desc");
			$alamat = $this->input->post("alamat");

			$config['upload_path']          = './assets/image/uploads/';
	        $config['allowed_types']        = 'jpg|png';
	        $config['max_size']             = 10000;

			$this->load->library('upload', $config);

	        if ($this->upload->do_upload('userfile')) {
		        $upload_data = $this->upload->data();
	        	$image = $upload_data["file_name"];
		        $data = array(
					"toko_id" => $toko_id,
					"images" => $image,
					"nama_toko" => $nama,
					"deskripsi" => $desc,
					"alamat" => $alamat
				);
	        } else {
	        	$data = array(
	            	"toko_id" => $toko_id,
					"nama_toko" => $nama,
					"deskripsi" => $desc,
					"alamat" => $alamat
				);        	
	        }
	        $this->kelola_toko_model->update_toko($toko_id, $data);
			redirect('kelola_toko');
		}

		function delete_barang() {
			$kode_barang = $this->input->post("kode_barang");

			$this->kelola_toko_model->delete($kode_barang);
			redirect('kelola_toko');
		}
	}
?>