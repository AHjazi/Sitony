<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BahanBakar extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_tambahbahanbakar');
		$data['bahanbakar'] = $this->M_tambahbahanbakar->show_data()->result();
		// var_dump($data);exit;
		$this->load->view('templates/adming/header');
        $this->load->view('templates/adming/sidebar');
		$this->load->view('templates/adming/navbar');
        $this->load->view('./adming/bahanbakar',$data);
        $this->load->view('templates/adming/footer');
	}
	public function tambah_bahanbakar()
	{
		$data['satuan'] = $this->db->query("SELECT * FROM satuan")->result();

		$this->load->view('templates/adming/header');
        $this->load->view('templates/adming/sidebar');
		$this->load->view('templates/adming/navbar');
        $this->load->view('adming/tambahbahanbakar', $data);
        $this->load->view('templates/adming/footer');
	}

	public function edit_bahanbakar($id)
	{
		$data['satuan'] = $this->db->query("SELECT * FROM satuan")->result();
		
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
		// $this->form_validation->set_rules('id_bahanbakar','kode_bahanbakar','jenis','id_satuan','keperluan','stok','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
	}
	public function tambah_data_aksi()
{
    $this->load->model('M_tambahbahanbakar');
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->tambah_bahanbakar();
    } else {
        // Get the input from the form
        $kode_bahanbakar = $this->input->post('kode_bahanbakar');
        $jenis = $this->input->post('jenis');
        $id_satuan = $this->input->post('id_satuan');
        $keperluan = $this->input->post('keperluan');
        $stok = $this->input->post('stok');

        // Check if kode_bahanbakar already exists
            $data = array(
                'kode_bahanbakar' => $kode_bahanbakar,
                'jenis' => $jenis,
                'id_satuan' => $id_satuan,
                'keperluan' => $keperluan,
                'stok' => $stok,
            );

            $brg = array(
                'kode_barang' => $kode_bahanbakar,
                'nama_barang' => $jenis,
                'tgl_barangmasuk' => date('Y-m-d'),
                'jam_barangmasuk' => date('H:i:s'),
                'jumlah' => $stok,
            );

			
            $this->load->model('M_tambahbahanbakar');
			$cek = $this->db->query("SELECT * FROM bahanbakar where kode_bahanbakar='".$this->input->post('kode_bahanbakar')."'");
            // Load the M_tambahbahanbakar model
			if ($cek->num_rows()>=1){
				 $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Kode Barang sudah ada!</strong> Data tidak bisa ditambahkan.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('./adming/bahanbakar/tambah_bahanbakar');
		} else { 
            $this->M_tambahbahanbakar->insert_data($data, 'bahanbakar');
            $this->M_tambahbahanbakar->insert_data($brg, 'barangmasuk');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil ditambahkan !</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');

            redirect('./adming/bahanbakar');
        }
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