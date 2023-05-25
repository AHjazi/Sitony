<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	
	public function index()
	{
		$this->load->model('M_tambahakun');
		$data['akun'] = $this->M_tambahakun->show_data();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('akun',$data);
        $this->load->view('templates/footer');
	}
	public function tambah_akun()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('tambahakun');
        $this->load->view('templates/footer');
	}
	public function _rules()
	{
		$this->form_validation->set_rules('id_user','username','password','nip','nama','divisi','email','no_telp','goldar','file','role','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
	}
	public function tambah_data_aksi()
	{
		$this->load->model('M_tambahakun');
		$data['akun'] = $this->M_tambahakun->show_data();
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah();
		}else{
			$id_user	  	      = $this->input->post('id_user');
			$username  		  	  = $this->input->post('username');
			$password 		 	  = $this->input->post('password');
			$nip   	 	 		  = $this->input->post('nip');
			$nama   	  		  = $this->input->post('nama');
			$divisi 	  	 	  = $this->input->post('divisi');
			$email   	 		  = $this->input->post('email');
			$no_telp   	 		  = $this->input->post('no_telp');
			$goldar   	 		  = $this->input->post('goldar');
			$file   	 		  = $this->input->post('file');
			$role   	 		  = $this->input->post('role');

			$data = array(
				'id_user'		=> $id_user,
				'username'		=> $username,
				'password'		=> $password,
				'nip'			=> $nip,
				'nama'			=> $nama,
				'divisi'		=> $divisi,
				'email'			=> $email,
				'no_telp'		=> $no_telp,
				'goldar'		=> $goldar,
				'file'			=> $file,
				'role'			=> $role,
			);

			$this->M_tambahakun->insert_data($data,'akun');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('akun');
		}
	
	}

}