<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Latih CI </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!--query menu -->
    <?php
    $role_id = $this->session->userdata('role_id');
    $cek_menu = "SELECT `a`.`id`, `a`.`menu`
                    FROM `ci_users_menu` `a` JOIN `ci_users_access_menu` `b` 
                        ON `a`.`id` = `b`.`menu_id`
                    WHERE `b`.`role_id` = $role_id
                ORDER BY `b`.`menu_id` ASC
                    ";
    $menu = $this->db->query($cek_menu)->result_array();

    ?>



    <!-- Looping Menu -->
    <?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading">
            <?= $m['menu']; ?>
        </div>

        <!-- SUB MENU -->
        <?php
        #$menuId = $m['id'];
        $cek_sub_menu = "SELECT `a`.*
                                FROM `ci_users_sub_menu` `a` JOIN `ci_users_menu` `b` 
                                    ON `a`.`menu_id` = `b`.`id`
                                WHERE `a`.`menu_id` = {$m['id']} AND `a`.`is_active` = 1
                        ";
        $subMenu = $this->db->query($cek_sub_menu)->result_array();

        ?>

        <?php foreach ($subMenu as $sm) : ?>
            <?php if ($title == $sm['title']) : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link pb-0" href="<?= base_url('/'), $sm['url']; ?>">
                    <i class="<?= $sm['icon']; ?>"></i>
                    <span><?= $sm['title']; ?></span></a>
                </li>
            <?php endforeach; ?>

            <hr class="sidebar-divider mt-3">

        <?php endforeach; ?>

        <!-- Divider -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>
<!-- End of Sidebar -->