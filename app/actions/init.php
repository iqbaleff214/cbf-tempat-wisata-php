<?php 

// Mengecek apakah halaman dan aksi telah terdaftar di file config.php
if (isset($pages[$_GET['page']]) && in_array($_GET['action'], $actions)) {

    // Jika tidak terdapat permintaan POST, maka akan diteruskan ke halaman beranda
    if (empty($_POST)) headTo($_GET['page']);

    if ($_GET['action'] == 'recommendation') {

        $history = $_POST;

        $similiarities = [];
        $user = [];
        $pariwisata = [];
        foreach ($history as $key => $value) 
            $user[] = floatval($value);

        setOld($history);

        $tb = (new Table('pariwisata'))->getAll();

        foreach ($tb as $value) {
            $pariwisata[$value['id_wisata']] = [
                floatval($value['prokes']),
                floatval($value['biaya']),
                floatval($value['rating']),
                floatval($value['parkir_mobil']),
                floatval($value['parkir_motor']),
                floatval($value['warung_makan']),
                floatval($value['toilet']),
                floatval($value['tempat_inap']),
                floatval($value['sewa_alat']),
            ];
        }

        foreach ($pariwisata as $key => $value) {
            $d = 0;

            for ($i=0; $i < 9; $i++) 
                $d += pow(($user[$i] - $value[$i]), 2);

            $s = 1 / ( 1 + $d);
            
            $similiarities[$key] = $s;
        }

        arsort($similiarities);

        $fav = array_keys($similiarities);

        $history['wisata1'] = $fav[0];
        $history['wisata2'] = $fav[1];
        $history['wisata3'] = $fav[2];

        (new Table('riwayat'))->insert($history);

        $message = $similiarities;
        
    } else {
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
        
    }
    setFlash($message);

    headTo($_GET['page']);
    exit();

} else {
    headTo('home');
}