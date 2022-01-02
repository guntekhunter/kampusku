<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tutorial_model extends CI_Model
{
    public function getTutorial()
    {
        $query = $this->db->get("tbl_bahasa");
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function getNama($bahasa)
    {
        $this->db->select('tutorial.*', 'tbl_bahasa.nama', 'tbl_bahasa.id');
        $this->db->from('tutorial');
        $this->db->join('tbl_bahasa', 'tutorial.id_bahasa = tbl_bahasa.id');
        $this->db->where(['tbl_bahasa.id' => $bahasa]);
        $query = $this->db->get();
        return $query->result();
    }
    public function getBahasa($bahasa)
    {
        $this->db->select('tbl_bahasa.nama');
        $this->db->from('tbl_bahasa');
        $this->db->where(['tbl_bahasa.id' => $bahasa]);
        $query = $this->db->get();
        return $query->result();
    }
    public function getId($bahasa)
    {
        $this->db->select('tbl_bahasa.*');
        $this->db->from('tbl_bahasa');
        $this->db->where(['tbl_bahasa.id' => $bahasa]);
        $query = $this->db->get();
        return $query->result();
    }
}
