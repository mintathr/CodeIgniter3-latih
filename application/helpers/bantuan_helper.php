<?php
function cek_is_logged_in()
{
    //helper tidak mengenal $this,
    //gunakan get_instance() utk memanggil library CI
    $lib_ci = get_instance(); //memanggil librari CI
    if (!$lib_ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $lib_ci->session->userdata('role_id');
        $menu = $lib_ci->uri->segment(1);

        $cek_menu = $lib_ci->db->get_where('ci_users_menu', ['menu' => $menu])->row_array();
        $menu_id = $cek_menu['id'];

        $cek_akses = $lib_ci->db->get_where('ci_users_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($cek_akses->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}

function check_akses($role_id, $menu_id)
{
    $lib_ci = get_instance();

    $lib_ci->db->where('role_id', $role_id);
    $lib_ci->db->where('menu_id', $menu_id);
    $result = $lib_ci->db->get('ci_users_access_menu');

    if ($result->num_rows() > 0) {
        return "checked = 'checked'";
    }
}

    /*tambahkan $autoload['helper'] = array('url', 'file', 'security', 'bantuan'); di autoload.php*/