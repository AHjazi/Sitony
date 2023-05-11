<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SparePart extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_tambahsparepart');
		$data['sparepart'] = $this->M_tambahsparepart->show_data();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('sparepart',$data);
        $this->load->view('templates/footer');
	}
	public function tambah_sparepart()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('tambahsparepart');
        $this->load->view('templates/footer');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_sparepart','kode_sparepart','nama','brand','stok','id_satuan','keperluan','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
	}
	public function tambah_data_aksi()
	{
		$this->load->model('M_tambahsparepart');
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah();
		}else{
			$id_sparepart	  	  = $this->input->post('id_sparepart');
			$kode_sparepart	  	  = $this->input->post('kode_sparepart');
			$nama 	 			  = $this->input->post('nama');
			$brand		 		  = $this->input->post('brand');
			$stok   	 		  = $this->input->post('stok');
			$id_satuan 	  	 	  = $this->input->post('id_satuan');
			$keperluan 	  	 	  = $this->input->post('keperluan');
			$data = array(
				'id_sparepart'		=> $id_sparepart,
				'kode_sparepart'	=> $kode_sparepart,
				'nama'				=> $nama,
				'brand'				=> $brand,
				'stok'				=> $stok,
				'id_satuan'			=> $id_satuan,
				'keperluan'			=> $keperluan,
			);

			$this->M_tambahsparepart->insert_data($data, 'sparepart');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('sparepart');
		}
	
	}
}