<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangKantor extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_tambahkantor');
		$data['barangkantor'] = $this->M_tambahkantor->show_data();
		// var_dump($data);exit;
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('barangkantor',$data);
        $this->load->view('templates/footer');
	}

	public function tambah_kantor()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('tambahkantor');
        $this->load->view('templates/footer');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_barang','nama_barang','kode_barang','id_satuan','stok','keperluan','brand','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
	}
	public function tambah_data_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah();
		}else{
			$id_barang	  	      = $this->input->post('id_barang');
			$nama_barang  		  = $this->input->post('nama_barang');
			$kode_barang 		  = $this->input->post('kode_barang');
			$id_satuan   	 	  = $this->input->post('id_satuan');
			$stok   	  		  = $this->input->post('stok');
			$keperluan 	  	 	  = $this->input->post('keperluan');
			$brand   	 		  = $this->input->post('brand');

			$data = array(
				'id_barang'		=> $id_barang,
				'nama_barang'	=> $nama_barang,
				'kode_barang'	=> $kode_barang,
				'id_satuan'		=> $id_satuan,
				'stok'			=> $stok,
				'keperluan'		=> $keperluan,
				'brand'			=> $brand,
			);

			$this->M_tambahkantor->insert_data($data, 'barangkantor');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('barangkantor');
		}
	
	}
}