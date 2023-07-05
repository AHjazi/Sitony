<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_tambahdivisi');
		$data['divisi'] = $this->M_tambahdivisi->show_data();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('divisi',$data);
        $this->load->view('templates/footer');
	}

	public function tambah_divisi()
	{
		
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('tambahdivisi');
        $this->load->view('templates/footer');
	}

	public function hapus_divisi($id_divisi = null)
	{
    if($id_divisi == null){
        redirect('satuan');
    }
    $where = array('id_divisi' => $id_divisi);
    $this->M_tambahdivisi->delete_data($where, 'divisi');
    $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus !</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    redirect('divisi');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_divisi','divisi','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
	}
	public function tambah_data_aksi()
	{
		$this->load->model('M_tambahdivisi');
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			// $this->tambah();
		}else{
			$id_divisi	  	  = $this->input->post('id_divisi');
			$divisi 	  	  = $this->input->post('divisi');
			
			$data = array(
				'id_divisi'		=> $id_divisi,
				'divisi'	    => $divisi,
			);

			$this->M_tambahdivisi->insert_data($data, 'divisi');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('divisi');
		}
	
	}
}