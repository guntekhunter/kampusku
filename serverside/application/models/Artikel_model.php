<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel_model extends CI_Model
{
    public function getArtikel()
    {
        $query = "SELECT * FROM artikel";

        return $this->db->query($query)->result_array();
    }
}
