<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		$this->load->view('templates/pembelian/header');
        $this->load->view('templates/pembelian/sidebar');
		$this->load->view('templates/pembelian/navbar');	
        $this->load->view('./pembelian/dashboard');
        $this->load->view('templates/pembelian/footer');
	}
}