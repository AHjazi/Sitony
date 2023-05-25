<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailPembelian extends CI_Controller {

	
	public function index()
	{
		$this->load->view('templates/pembelian/header');
        $this->load->view('templates/pembelian/sidebar');
		$this->load->view('templates/pembelian/navbar');	
        $this->load->view('./pembelian/detailpembelian');
        $this->load->view('templates/pembelian/footer');
	}
}