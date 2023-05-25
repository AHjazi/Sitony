<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahBarangMasuk extends CI_Controller {

	
	public function index()
	{
		$this->load->view('templates/adming/header');
        $this->load->view('templates/adming/sidebar');
		$this->load->view('templates/adming/navbar');	
        $this->load->view('./adming/tambahbarangmasuk');
        $this->load->view('templates/adming/footer');
	}
}