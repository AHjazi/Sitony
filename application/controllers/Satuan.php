<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_tambahsatuan');
		$data['satuan'] = $this->M_tambahsatuan->show_data();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('satuan',$data);
        $this->load->view('templates/footer');
	}
	public function tambah_satuan()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('tambahsatuan');
        $this->load->view('templates/footer');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_satuan','jenis_satuan','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
	}
	public function tambah_data_aksi()
	{
		$this->load->model('M_tambahsatuan');
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			// $this->tambah();
		}else{
			$id_satuan	  	  = $this->input->post('id_satuan');
			$jenis_satuan 	  = $this->input->post('jenis_satuan');
			$data = array(
				'id_satuan'		=> $id_satuan,
				'jenis_satuan'	=> $jenis_satuan,
			);

			$this->M_tambahsatuan->insert_data($data, 'satuan');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('satuan');
		}
	
	}
}