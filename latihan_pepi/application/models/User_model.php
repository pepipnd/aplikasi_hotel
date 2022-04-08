<?php 

class User_model extends CI_Model {
    public function jenisk()
    {
        return $this->db->get('tbl_jenis_kamar')->result();
    }
}