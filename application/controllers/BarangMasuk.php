<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangMasuk extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_barangmasuk');
		$data['barangmasuk'] = $this->M_barangmasuk->show_data();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');	
        $this->load->view('barangmasuk',$data);
        $this->load->view('templates/footer');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_barangmasuk','kode_barang','nama_barang','tgl_barangmasuk','jam_barangmasuk','jumlah','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
	}
}