<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardKaryawan extends CI_Controller {

	
	public function index()
	{
		$data['id_user'] = $this->session->userdata('id_user');

		$this->load->view('templates/karyawan/header');
        $this->load->view('templates/karyawan/sidebar', $data);
		$this->load->view('templates/karyawan/navbar');
        $this->load->view('./karyawan/dashboardkaryawan', $data);
        $this->load->view('templates/karyawan/footer');
	}
}