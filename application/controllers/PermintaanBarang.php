<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PermintaanBarang extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_permintaan');
		$data['permintaan'] = $this->M_permintaan->show_data();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('permintaanbarang',$data);
        $this->load->view('templates/footer');
	}

	public function eksekusipermintaan()
	{
		$this->load->model('M_permintaan');
		$this->M_permintaan->update_jumlah();
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Permintaan Berhasil Di Eksekusi!</strong> Silahkan Cek Data Permintaan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');
		redirect('PermintaanBarang');
	}

}