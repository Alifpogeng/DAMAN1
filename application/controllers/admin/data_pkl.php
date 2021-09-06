<?php

class Data_pkl extends CI_Controller{
	public function index()
	{
		$data['datapkl'] = $this->model_datapkl->tampil_data()->result();
		// echo print_r($data);
		// $data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view("templates_admin/header");
		$this->load->view("templates_admin/sidebar");
		$this->load->view("admin/data_pkl", $data);
		$this->load->view("templates_admin/footer");

	}
} 
?>