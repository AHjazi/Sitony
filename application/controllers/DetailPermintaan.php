<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailPermintaan extends CI_Controller {

	
	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('detailpermintaan');
        $this->load->view('templates/footer');
	}
}