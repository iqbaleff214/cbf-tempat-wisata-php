<?php $wisata = new Table('pariwisata', 'id_wisata'); ?>
<?php $data = $wisata->get($_GET['id']); ?>

<div class="container-fluid">
    <div class="row">

        <div class="col">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <a href="<?= linkTo('wisata-'. $data['kategori']) ?>" class="btn btn-primary">Kembali</a>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row">
                
                        <div class="col">
                            <h5 class="text-center font-weight-bold"><?= $data['nama_wisata'] ?></h5>
                            <div class="card bg-dark text-white my-4">
                                <img src="<?= $data['gambar'] ?: 'https://picsum.photos/1200/450' ?>" class="card-img" alt="<?= $data['nama_wisata'] ?>">
                            </div>
                            <p class="text-muted text-center"><?= $data['alamat'] ?></p>
                            <?= $data['maps'] ?: '' ?>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>