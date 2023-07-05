<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_permintaan');
		$data['permintaan'] = $this->M_permintaan->show_data();
		$this->load->view('templates/karyawan//header');
        $this->load->view('templates/karyawan//sidebar');
		$this->load->view('templates/karyawan//navbar');	
        $this->load->view('./karyawan/permintaan',$data);
        $this->load->view('templates/karyawan//footer');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_permintaan','nip','nama_barang','id_satuan','nama_pegawai','id_divisi','keperluan','jumlah','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
	}
}