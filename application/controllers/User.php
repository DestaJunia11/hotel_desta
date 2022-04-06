<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index(){
		
		$this->load->view('partial_home/header');
		$this->load->view('partial_home/navigasi_user');
		$this->load->view('content/index');
		$this->load->view('partial_home/footer');
		$this->load->view('partial_home/modals');
		$this->load->view('partial_home/js');
	}
}
