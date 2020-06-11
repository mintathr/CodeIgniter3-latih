config/config.php
	=> ubah base_url 'http://localhost:8081/latih_ci/'
	=> $config[index_page] -> index.php dikosongkan
	=> bila index.php yg diatas dihapus harus membuat file .htaccess sendiri, create new file save dgn nama .htaccess (simpan di luar)
	   buka dokumentasi codeigniter ->ketik htaccess->codeigniter url->Removing the index.php->copy semua

config/autoload.php
	=> $autoload['libraries'] = array('database', 'email', 'session');
	=> $autoload['helper'] = array('url', 'file', 'security');

config/routes.php
	=> $route['default_controller'] = 'auth'; agar halamn pertama ke login page
	=> buat Controller baru -> new file Auth.php
	=> buat folder auth di views dan create file login.php

config/database.php
	=> configurasi database

