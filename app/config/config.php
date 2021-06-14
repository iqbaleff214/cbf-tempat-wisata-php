<?php 

define('BASEURL', 'http://localhost/latihan/simple-native/');
define('APPNAME', 'Aplikasi CRUD');

define('HOSTNAME', 'localhost');
define('USERNAME', 'admin');
define('PASSWORD', 'admin');
define('DATABASE', 'kuliah_web');

// Mengatur mode halaman
define('DARKMODE', true);

// Daftar halaman yang tersedia
$pages = [
    'home' => 'home.php',
    # Jurusan
    'jurusan' => 'jurusan/index.php',
    'jurusan_detail' => 'jurusan/show.php',
    'jurusan_tambah' => 'jurusan/create.php',
    'jurusan_edit' => 'jurusan/edit.php',
];

// Daftar tabel dan primary key-nya
$tables = [
    'jurusan' => 'id_jurusan',
];

// Daftar aksi yang tersedia
$actions = [
    'show',
    'insert',
    'update',
    'delete'
];