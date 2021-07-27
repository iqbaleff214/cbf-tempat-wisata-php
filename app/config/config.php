<?php 

define('BASEURL', 'http://localhost/latihan/ta-andin/');
define('APPNAME', 'REKOMENDASI WISATA');

define('HOSTNAME', 'localhost');
define('USERNAME', 'admin');
define('PASSWORD', 'admin');
define('DATABASE', 'kuliah_web');

// Mengatur mode halaman
define('DARKMODE', true);

// Daftar halaman yang tersedia
$pages = [
    'home' => 'home.php',
    'rekomendasi' => 'rekomendasi.php',
    # Jurusan
    'jurusan' => 'jurusan/index.php',
    'jurusan_detail' => 'jurusan/show.php',
    'jurusan_tambah' => 'jurusan/create.php',
    'jurusan_edit' => 'jurusan/edit.php',
];

$categories = [
    'wisata-alam' => 'wisata/alam.php',
    'wisata-kuliner' => 'wisata/kuliner.php',
    'wisata-edukasi' => 'wisata/edukasi.php',
    'wisata-religi' => 'wisata/religi.php',
    'wisata-rekreasi' => 'wisata/rekreasi.php',
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
    'delete',

    'recommendation',
];

$wisata = [
    'Wisata A' => [.5, .6, .5, .5, .1, .1, .5, .1, .1],
    'Wisata B' => [.5, .8, .5, .2, .5, .5, .5, .1, .1],
    'Wisata C' => [.5, .7, .5, .5, .5, .1, .5, .1, .1],
    'Wisata D' => [.5, .8, .0, .5, .1, .5, .5, .1, .1],
];

