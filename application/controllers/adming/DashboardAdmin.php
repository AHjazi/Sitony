<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardAdmin extends CI_Controller {

	
	public function index()
	{
		$this->load->view('templates/adming/header');
        $this->load->view('templates/adming/sidebar');
		$this->load->view('templates/adming/navbar');	
        $this->load->view('./adming/dashboardadmin');
        $this->load->view('templates/adming/footer');
	}
}