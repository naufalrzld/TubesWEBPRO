<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Barang_Model');
	}

	public function index()
	{
		$limit_per_page = 2;
        $start_index = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

		$data['barang'] = $this->Barang_Model->get_barang($limit_per_page, $start_index);

		$config['base_url'] = base_url()."page";
		$config['total_rows'] = $this->Barang_Model->get_data_row();
		$config['per_page'] = $limit_per_page;
		$config["uri_segment"] = 2;

		$this->pagination->initialize($config);

		$data["links"] = $this->pagination->create_links();

		$this->load->view('index', $data);

	}
	
	public function detail($barang_id)
	{
		$data['barang'] = $this->Barang_Model->detail_barang($barang_id);
		$this->load->view('v_header');
		$this->load->view('detail_barang',$data);
		$this->load->view('v_footer');
	}

	public function addToCart() {
		$data = array(
			'id' => $this->input->post('barang_id'),
			'name' => $this->input->post('nama_barang'),
			'price' => $this->input->post('harga'),
			'qty' => $this->input->post('quantity'),
		);

		$this->cart->insert($data);
		redirect('dashboard');
	}
}