<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailKaryawan extends CI_Controller {

	
	public function index($id)
	{
		$this->load->model('M_detailakun');
		$data['akun'] = $this->M_detailakun->show_data();
		$data['id_user'] = $this->session->userdata('id_user');
		$id = $this->input->get('id');
		$data['akun'] = $this->M_detailakun->edit_akun($id);
		$this->load->view('templates/karyawan/header');
        $this->load->view('templates/karyawan/sidebar');
		$this->load->view('templates/karyawan/navbar');	
        $this->load->view('karyawan/detailkaryawan', $data);
        $this->load->view('templates/karyawan/footer');
	}
	public function edit_bahanbakar($id)
	{
		$this->load->model('M_detailakun');
		$data['akun'] = $this->M_detailakun->edit_akun($id);
		$this->load->view('templates/adming/header');
        $this->load->view('templates/adming/sidebar');
		$this->load->view('templates/adming/navbar');
        $this->load->view('./adming/detailkaryawan',$data);
        $this->load->view('templates/adming/footer');
	}
	public function update_data_aksi()
	{
		$this->load->model('M_detailakun');
		$this->_rules();
			$id_user	  = $this->input->post('id_user');
			$username 	  = $this->input->post('username');
			$password	  = $this->input->post('password');
			$nip   	 	  = $this->input->post('nip');
			$nama 	  	  = $this->input->post('nama');
			$divisi 	  = $this->input->post('divisi');
			$email 	  	  = $this->input->post('email');
			$no_telp 	  = $this->input->post('no_telp');
			$goldar 	  = $this->input->post('goldar');
			$file 	  	  = $this->input->post('file');
			$id_role 	  = $this->input->post('id_role');
			$data = array(
				'id_user'	=> $id_user,
				'username'	=> $username,
				'password'	=> $password,
				'nip'		=> $nip,
				'nama'		=> $nama,
				'divisi'	=> $divisi,
				'email'		=> $email,
				'no_telp'	=> $no_telp,
				'goldar'	=> $goldar,
				'file'		=> $file,
				'id_role'	=> $id_role,
			);
			
			$where = array(
				'id_user' => $id_user
			);

			$this->M_detailakun->update_data('akun', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('./karyawan/detailkaryawan');
	}
}