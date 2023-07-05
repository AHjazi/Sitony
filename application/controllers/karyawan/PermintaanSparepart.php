<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PermintaanSparepart extends CI_Controller {

	
	public function index()
	{
		$data['barang']=$this->db->query("SELECT * FROM sparepart where stok>10")->result();
		$data['satuan'] = $this->db->query("SELECT * FROM satuan")->result();
		$data['divisi'] = $this->db->query("SELECT * FROM divisi")->result();
		$this->load->view('templates/karyawan/header');
        $this->load->view('templates/karyawan/sidebar');
		$this->load->view('templates/karyawan/navbar');	
        $this->load->view('./karyawan/permintaansparepart',$data);
        $this->load->view('templates/karyawan/footer');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_permintaan','nip','nama_barang','id_satuan','nama_pegawai','id_divisi','keperluan','jumlah','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
	}
	public function tambah_data_aksi()
	{
		$this->load->model('M_permintaansparepart');
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah();
		}else{
			$id_permintaan	  	  = $this->input->post('id_permintaan');
			$nip 	 			  = $this->input->post('nip');
			$nama_barang		  = $this->input->post('nama_barang');
			$id_satuan		  	  = $this->input->post('id_satuan');
			$nama_pegawai   	  = $this->input->post('nama');
			$divisi 	  	 	  = $this->input->post('divisi');
			$keperluan 	  	 	  = $this->input->post('keperluan');
			$jumlah 	  	 	  = $this->input->post('jumlah');
			$data = array(
				'id_permintaan'		=> $id_permintaan,
				'nip'				=> $nip,
				'nama_barang'		=> $nama_barang,
				'id_satuan'			=> $id_satuan,
				'nama_pegawai'		=> $nama_pegawai,
				'divisi'			=> $divisi,
				'keperluan'			=> $keperluan,
				'jumlah'			=> $jumlah,
			);

			$this->M_permintaansparepart->insert_data($data, 'permintaan');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('./karyawan/permintaan');
		}
	
	}

}