<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BahanBakar extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_tambahbahanbakar');
		$data['bahanbakar'] = $this->M_tambahbahanbakar->show_data();
		// var_dump($data);exit;
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('bahanbakar',$data);
        $this->load->view('templates/footer');
	}
	public function tambah_bahanbakar()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('tambahbahanbakar');
        $this->load->view('templates/footer');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_bahanbakar','kode_bahanbakar','jenis','id_satuan','keperluan','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
	}
	public function tambah_data_aksi()
	{
		$this->load->model('M_tambahbahanbakar');
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah();
		}else{
			$id_bahanbakar	  	  = $this->input->post('id_bahanbakar');
			$kode_bahanbakar 	  = $this->input->post('kode_bahanbakar');
			$jenis		 		  = $this->input->post('jenis');
			$id_satuan   	 		  = $this->input->post('id_satuan');
			$keperluan 	  	 	  = $this->input->post('keperluan');
			$data = array(
				'id_bahanbakar'		=> $id_bahanbakar,
				'kode_bahanbakar'	=> $kode_bahanbakar,
				'jenis'				=> $jenis,
				'id_satuan'			=> $id_satuan,
				'keperluan'			=> $keperluan,
			);

			$this->M_tambahbahanbakar->insert_data($data, 'bahanbakar');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('bahanbakar');
		}
	
	}
}