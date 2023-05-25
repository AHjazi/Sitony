<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan extends CI_Controller {

	
	public function index()
	{
		$this->load->view('templates/karyawan/header');
        $this->load->view('templates/karyawan/sidebar');
		$this->load->view('templates/karyawan/navbar');
        $this->load->view('./karyawan/permintaan');
        $this->load->view('templates/karyawan/footer');
	}
}