<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangKeluar extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_barangkeluar');
		$data['barangkeluar'] = $this->M_barangkeluar->insert_data_keluar();
		$data['barangkeluar'] = $this->M_barangkeluar->show_data()->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('barangkeluar',$data);
        $this->load->view('templates/footer');
	}

	
	
}