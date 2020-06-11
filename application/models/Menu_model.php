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
}
