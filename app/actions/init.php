<?php 

// Mengecek apakah halaman dan aksi telah terdaftar di file config.php
if (isset($pages[$_GET['page']]) && in_array($_GET['action'], $actions)) {

    // Jika tidak terdapat permintaan POST, maka akan diteruskan ke halaman beranda
    if (!isset($_POST)) headTo('home');

    // Membuat objek tabel dengan nama tabel sesuai dengan nama halaman
    $tb = new Table($_GET['page'], $tables[$_GET['page']]);
    // Menyimpan data POST ke dalam variabel
    $data = $_POST;

    // Menentukan aksi yang akan dilakukan
    switch ($_GET['action']) {
        case 'insert':
            // Memanggil method insert
            $message = ($tb->insert($data)) ? "Berhasil menambahkan data!" : "Gagal menambahkan data!";
            break;
        case 'update':
            $id = $_GET['id'];
            // Memanggil method update
            $message = ($tb->update($id, $data)) ? "Berhasil mengedit data!" : "Gagal mengedit data!";
            break;
        case 'delete':
            $id = $_POST['id'];
            // Memanggil method delete
            $message = ($tb->delete($id)) ? "Berhasil menghapus data!" : "Gagal menghapus data!";
            break;
    }
                
    setFlash($message);
    headTo($_GET['page']);
    exit();

} else {
    headTo('home');
}