<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardKaryawan extends CI_Controller {

	
	public function index()
	{
		$this->load->view('templates/karyawan/header');
        $this->load->view('templates/karyawan/sidebar');
		$this->load->view('templates/karyawan/navbar');
        $this->load->view('./karyawan/dashboardkaryawan');
        $this->load->view('templates/karyawan/footer');
	}

	public function akun()
	{
		$this->load->view('templates/karyawan/header');
        $this->load->view('templates/karyawan/sidebar');
		$this->load->view('templates/karyawan/navbar');
        $this->load->view('./karyawan/detailakun');
        $this->load->view('templates/karyawan/footer');
	}
}