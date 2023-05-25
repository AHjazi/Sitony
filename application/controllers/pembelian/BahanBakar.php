<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BahanBakar extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_tambahbahanbakar');
		$data['bahanbakar'] = $this->M_tambahbahanbakar->show_data();
		// var_dump($data);exit;
		$this->load->view('templates/pembelian/header');
        $this->load->view('templates/pembelian/sidebar');
		$this->load->view('templates/pembelian/navbar');
        $this->load->view('./pembelian/bahanbakar',$data);
        $this->load->view('templates/pembelian/footer');
	}
	public function tambah_bahanbakar()
	{
		$this->load->view('templates/adming/header');
        $this->load->view('templates/adming/sidebar');
		$this->load->view('templates/adming/navbar');
        $this->load->view('./adming/tambahbahanbakar');
        $this->load->view('templates/adming/footer');
	}

	public function edit_bahanbakar($id)
	{
		$this->load->model('M_tambahbahanbakar');
		$data['bahanbakar'] = $this->M_tambahbahanbakar->edit_bahanbakar($id);
		$this->load->view('templates/adming/header');
        $this->load->view('templates/adming/sidebar');
		$this->load->view('templates/adming/navbar');
        $this->load->view('./adming/editbahanbakar',$data);
        $this->load->view('templates/adming/footer');
	}

	public function hapus_bahanbakar($id_bahanbakar = null)
	{
    if($id_bahanbakar == null){
        redirect('bahanbakar');
    }
    $where = array('id_bahanbakar' => $id_bahanbakar);
    $this->M_tambahbahanbakar->delete_data($where, 'bahanbakar');
    $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus !</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    redirect('./adming/bahanbakar');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_bahanbakar','kode_bahanbakar','jenis','id_satuan','keperluan','stok','required');
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
			$id_satuan   	 	  = $this->input->post('id_satuan');
			$keperluan 	  	 	  = $this->input->post('keperluan');
			$stok 	  	 		  = $this->input->post('stok');
			$data = array(
				'id_bahanbakar'		=> $id_bahanbakar,
				'kode_bahanbakar'	=> $kode_bahanbakar,
				'jenis'				=> $jenis,
				'id_satuan'			=> $id_satuan,
				'keperluan'			=> $keperluan,
				'stok'				=> $stok,
			);

			$this->M_tambahbahanbakar->insert_data($data, 'bahanbakar');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('./adming/bahanbakar');
		}
	
	}
	public function update_data_aksi()
	{
		$this->load->model('M_tambahbahanbakar');
		$this->_rules();
			$id_bahanbakar	  	  = $this->input->post('id_bahanbakar');
			$kode_bahanbakar 	  = $this->input->post('kode_bahanbakar');
			$jenis		 		  = $this->input->post('jenis');
			$id_satuan   	 	  = $this->input->post('id_satuan');
			$keperluan 	  	 	  = $this->input->post('keperluan');
			$stok 	  	 	 	  = $this->input->post('stok');
			$data = array(
				'id_bahanbakar'		=> $id_bahanbakar,
				'kode_bahanbakar'	=> $kode_bahanbakar,
				'jenis'				=> $jenis,
				'id_satuan'			=> $id_satuan,
				'keperluan'			=> $keperluan,
				'stok'				=> $stok,
			);
			
			$where = array(
				'id_bahanbakar' => $id_bahanbakar
			);

			$this->M_tambahbahanbakar->update_data('bahanbakar', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('./adming/bahanbakar');
	}
}