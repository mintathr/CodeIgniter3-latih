<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    //fungsi menampilkan semua data siswa
    public function view()
    {
        return $this->db->get('ci_siswa')->result();
    }
}
