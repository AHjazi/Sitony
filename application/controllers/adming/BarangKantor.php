<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangKantor extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_tambahkantor');
		$data['barangkantor'] = $this->M_tambahkantor->show_data();
		// var_dump($data);exit;
		$this->load->view('templates/adming/header');
        $this->load->view('templates/adming/sidebar');
		$this->load->view('templates/adming/navbar');
        $this->load->view('./adming/barangkantor',$data);
        $this->load->view('templates/adming/footer');
	}

	public function tambah_kantor()
	{
		$data['satuan'] = $this->db->query("SELECT * FROM satuan")->result();

		$this->load->view('templates/adming/header');
        $this->load->view('templates/adming/sidebar');
		$this->load->view('templates/adming/navbar');
        $this->load->view('./adming/tambahkantor',$data);
        $this->load->view('templates/adming/footer');
	}

	public function edit_kantor($id)
	{
		$data['satuan'] = $this->db->query("SELECT * FROM satuan")->result();

		$this->load->model('M_tambahkantor');
		$data['barangkantor'] = $this->M_tambahkantor->edit_kantor($id);
		$this->load->view('templates/adming/header');
        $this->load->view('templates/adming/sidebar');
		$this->load->view('templates/adming/navbar');
        $this->load->view('./adming/editbarangkantor',$data);
        $this->load->view('templates/adming/footer');
	}

	public function hapus_kantor($id_barang = null)
	{
    if($id_barang == null){
        redirect('barangkantor');
    }
    $where = array('id_barang' => $id_barang);
    $this->M_tambahkantor->delete_data($where, 'barangkantor');
    $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus !</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    redirect('./adming/barangkantor');
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
			$tgl_barangmasuk 	  = date('Y-m-d');
			$jam_barangmasuk 	  = time('H:i:s');

			$data = array(
				'id_barang'		=> $id_barang,
				'nama_barang'	=> $nama_barang,
				'kode_barang'	=> $kode_barang,
				'id_satuan'		=> $id_satuan,
				'stok'			=> $stok,
				'keperluan'		=> $keperluan,
				'brand'			=> $brand,
			);
			$brg = array(
				'kode_barang'		=> $kode_barang,
				'nama_barang'		=> $nama_barang,
				'tgl_barangmasuk'	=> $tgl_barangmasuk,
				'jam_barangmasuk'	=> $jam_barangmasuk,
				'jumlah'			=> $stok,
			);
			$this->M_tambahkantor->insert_data($data, 'barangkantor');
			$this->M_tambahkantor->insert_data($brg, 'barangmasuk');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('./adming/barangkantor');
		}
	
	}

	public function update_data_aksi()
	{
		$this->_rules();
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
			
			$where = array(
				'id_barang' => $id_barang
			);

			$this->M_tambahkantor->update_data('barangkantor', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('./adming/barangkantor');
	}
}