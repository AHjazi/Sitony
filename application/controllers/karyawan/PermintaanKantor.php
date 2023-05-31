<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PermintaanKantor extends CI_Controller {

	
	public function index()
	{
		$this->load->view('templates/karyawan/header');
        $this->load->view('templates/karyawan/sidebar');
		$this->load->view('templates/karyawan/navbar');	
        $this->load->view('./karyawan/permintaankantor');
        $this->load->view('templates/karyawan/footer');
	}
}