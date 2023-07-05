<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	
	public function index()
	{
		
		// $data['divisi'] = $this->db->query("SELECT * FROM divisi")->result();
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
		$data['role'] = $this->db->query("SELECT * FROM role")->result();
		$data['divisi'] = $this->db->query("SELECT * FROM divisi")->result();
		
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('tambahakun',$data);
        $this->load->view('templates/footer');
	}
	public function edit_akun($id)
	{
		$data['role'] = $this->db->query("SELECT * FROM role")->result();
		$data['divisi'] = $this->db->query("SELECT * FROM divisi")->result();
		$data['akun'] = $this->db->query("SELECT * FROM akun")->result();
		$this->load->model('M_tambahakun');
		$data['akun'] = $this->M_tambahakun->edit_akun($id);
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('editakun',$data);
        $this->load->view('templates/footer');
	}

	public function hapus_kantor($id_user = null)
	{
    if($id_user == null){
        redirect('akun');
    }
    $where = array('id_user' => $id_user);
    $this->M_tambahakun->delete_data($where, 'akun');
    $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus !</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    redirect('akun');
	}
	public function _rules()
	{
		$this->form_validation->set_rules('id_user','username','password','nip','nama','id_divisi','email','no_telp','goldar','file','id_role','required');
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
			$id_divisi 	  	 	  = $this->input->post('id_divisi');
			$email   	 		  = $this->input->post('email');
			$no_telp   	 		  = $this->input->post('no_telp');
			$goldar   	 		  = $this->input->post('goldar');
			$file   	 		  = $this->input->post('file');
			$id_role   	 		  = $this->input->post('id_role');

			$data = array(
				'id_user'		=> $id_user,
				'username'		=> $username,
				'password'		=> $password,
				'nip'			=> $nip,
				'nama'			=> $nama,
				'id_divisi'		=> $id_divisi,
				'email'			=> $email,
				'no_telp'		=> $no_telp,
				'goldar'		=> $goldar,
				'file'			=> $file,
				'id_role'			=> $id_role,
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
	public function update_data_aksi()
	{
		$this->load->model('M_tambahakun');
		$this->_rules();
		$id_user	  	      = $this->input->post('id_user');
		$username  		  	  = $this->input->post('username');
		$password 		 	  = $this->input->post('password');
		$nip   	 	 		  = $this->input->post('nip');
		$nama   	  		  = $this->input->post('nama');
		$id_divisi 	  	 	  = $this->input->post('id_divisi');
		$email   	 		  = $this->input->post('email');
		$no_telp   	 		  = $this->input->post('no_telp');
		$goldar   	 		  = $this->input->post('goldar');
		$file   	 		  = $this->input->post('file');
		$id_role   	 		  = $this->input->post('id_role');
			$data = array(
				'id_user'		=> $id_user,
				'username'		=> $username,
				'password'		=> $password,
				'nip'			=> $nip,
				'nama'			=> $nama,
				'id_divisi'		=> $id_divisi,
				'email'			=> $email,
				'no_telp'		=> $no_telp,
				'goldar'		=> $goldar,
				'file'			=> $file,
				'id_role'			=> $id_role,
			);
			
			$where = array(
				'id_user' => $id_user
			);

			$this->M_tambahakun->update_data('akun', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('akun');
	}

}