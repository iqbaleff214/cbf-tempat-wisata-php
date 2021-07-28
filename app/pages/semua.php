<?php $wisata = new Table('pariwisata'); ?>
<?php $data = $wisata->getLike(['nama_wisata' => $_POST['cari']]); ?>

<div class="container-fluid">
    <div class="row">

        <div class="col">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><?= isset($_POST['cari']) ? 'Pencarian' : 'Semua' ?></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row">
                        <?php if($data): ?>
                            <?php foreach($data as $item): ?>
                            <div class="col-12 col-sm-6 col-lg-4 mb-5">
                                <a href="<?= linkWithId('detail', $item['id_wisata']) ?>" style="text-decoration: none;">
                                    <h5 class="text-center font-weight-bold"><?= $item['nama_wisata'] ?></h5>
                                    <div class="card bg-dark text-white my-4">
                                        <img src="<?= $item['gambar'] ?: 'https://picsum.photos/1200/750' ?>" class="card-img" alt="<?= $item['nama_wisata'] ?>">
                                    </div>
                                    <p class="text-muted text-center"><?= $item['alamat'] ?></p>
                                </a>
                            </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="col text-center">
                                <p class="">Tidak ada tempat wisata dengan kata kunci <?= isset($_POST['cari']) ? '"'.$_POST['cari'].'"' : 'tersebut' ?>.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>