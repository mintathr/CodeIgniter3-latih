<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $cek_menu = "SELECT `a`.*, `b`.`menu`
                    FROM `ci_users_sub_menu` `a`
                    JOIN `ci_users_menu` `b`
                    ON `a`.`menu_id` = `b`.`id`
                ";
        return $this->db->query($cek_menu)->result_array();
    }

    public function addDataMenu()
    {
        $this->db->insert('ci_users_menu', ['menu' => $this->input->post('menu', true)]); //fungsi true unutk membersihkan dari serangan sql injection fungsinya krg lbh sm dengan htmlspecialcharqacter
    }

    public function deleteDataMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('ci_users_menu');
    }
}
