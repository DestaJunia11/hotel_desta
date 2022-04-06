<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index(){
		
		$this->load->view('partial_admin/header');
		$this->load->view('partial_admin/sidebar');
		$this->load->view('partial_admin/topbar');
		$this->load->view('partial_admin/index');
		$this->load->view('partial_admin/footer');
		
	}
}
