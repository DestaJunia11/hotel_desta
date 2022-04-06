<?php
class Data_kamar extends CI_Controller {

	public function index()
    {
       
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial/admin_topbar');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/data_jenis_kamar');
        $this->load->view('partial_admin/footer');   
    }

}