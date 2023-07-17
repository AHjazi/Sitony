<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SparePart extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_tambahsparepart');
		$data['sparepart'] = $this->M_tambahsparepart->show_data()->result();
		// var_dump($data['sparepart']);exit;
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('sparepart',$data);
        $this->load->view('templates/footer');
	}
	public function tambah_sparepart()
	{
		$data['satuan'] = $this->db->query("SELECT * FROM satuan")->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('tambahsparepart',$data);
        $this->load->view('templates/footer');
	}

	public function edit_sparepart($id)
	{
		$data['satuan'] = $this->db->query("SELECT * FROM satuan")->result();
		$this->load->model('M_tambahsparepart');
		$data['sparepart'] = $this->M_tambahsparepart->edit_sparepart($id);
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('editsparepart',$data);
        $this->load->view('templates/footer');
	}

	public function hapus_sparepart($id_sparepart = null)
	{
    if($id_sparepart == null){
        redirect('sparepart');
    }
    $where = array('id_sparepart' => $id_sparepart);
    $this->M_tambahsparepart->delete_data($where, 'sparepart');
    $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus !</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    redirect('sparepart');
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
			$this->tambah_sparepart();
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

				$cek = $this->db->query("SELECT * FROM sparepart where kode_sparepart='".$this->input->post('kode_sparepart')."'");
			if ($cek->num_rows()>=1){
				 $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Kode Barang sudah ada!</strong> Data tidak bisa ditambahkan.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
			redirect('sparepart/tambah_sparepart');
			}else {
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

	public function update_data_aksi()
	{
		$this->load->model('M_tambahsparepart');
		$this->_rules();
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
			
			$where = array(
				'id_sparepart' => $id_sparepart
			);

			$this->M_tambahsparepart->update_data('sparepart', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('sparepart');
	}
}