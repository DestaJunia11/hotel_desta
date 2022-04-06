<?php
class M_jenis_kamar extends CI_Model
{
	function SemuaData()
    {
        return $this->db->get('tbl_jenis_kamar')->result_array();
    }
    function update($id_jenis)
    {
        return $this->db->get('tbl_jenis_kamar',['id_jenis' =>$id_jenis])->row_array()
    }
    function hapus($id_jenis)
 {