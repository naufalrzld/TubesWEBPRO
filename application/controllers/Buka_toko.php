<?php 
class Buka_toko extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('toko_model');
	}
	function index()
	{
		$this->load->view('v_buka_toko');
	}
	function buat_toko(){
		$member_id = $this->session->userdata("member_id");
		$nama = $this->input->post("name");
		$desc = $this->input->post("desc");
		$alamat = $this->input->post("alamat");

		$data = array(
			"member_id" => $member_id,
			"nama_toko" => $nama,
			"deskripsi" => $desc,
			"alamat" => $alamat
		);
		$this->toko_model->create($data);
		redirect('dashboard');
	}
}
