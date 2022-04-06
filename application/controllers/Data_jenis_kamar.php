<?php
class Data_jenis_kamar extends CI_Controller 
{
	public function index()
    {
       $data['tbl_jenis-kamar']=$this->M.jenis_kamar->semua data();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/data_jenis_kamar' );
        $this->load->view('partial_admin/footer');   
    }

}
		