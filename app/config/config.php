<?php 

define('BASEURL', 'http://localhost/latihan/ta-andin/');
define('APPNAME', 'REKOMENDASI WISATA');

define('HOSTNAME', 'localhost');
define('USERNAME', 'admin');
define('PASSWORD', 'admin');
define('DATABASE', 'ta_andin');

// Mengatur mode halaman
define('DARKMODE', true);

// Daftar halaman yang tersedia
$pages = [
    # Halaman Utama
    'home'              => 'home.php',
    'rekomendasi'       => 'rekomendasi.php',
    'semua'             => 'semua.php',
    'detail'            => 'detail.php',

    # Kategori
    'wisata-alam'       => 'kategori.php',
    'wisata-kuliner'    => 'kategori.php',
    'wisata-edukasi'    => 'kategori.php',
    'wisata-religi'     => 'kategori.php',
    'wisata-rekreasi'   => 'kategori.php',
];

$categories = [
    'wisata-alam'       => 'kategori.php',
    'wisata-kuliner'    => 'kategori.php',
    'wisata-edukasi'    => 'kategori.php',
    'wisata-religi'     => 'kategori.php',
    'wisata-rekreasi'   => 'kategori.php',
];

// Daftar tabel dan primary key-nya
$tables = [
    # Khusus CRUD
    'jurusan' => 'id_jurusan',
];

// Daftar aksi yang tersedia
$actions = [
    'recommendation',

    # khusus CRUD
    'show',
    'insert',
    'update',
    'delete',
];

