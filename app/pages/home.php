<?php $riwayat = (new Table('riwayat'))->getGroup('wisata1'); ?>
<?php $pariwisata = new Table('pariwisata', 'id_wisata'); ?>

<div class="container-fluid">
    <div class="row">

        <div class="col">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tempat Wisata Rekomendasi</h6>
                    <a href="<?= linkTo('semua') ?>" class="btn btn-primary float-right">Semua Tempat Wisata</a>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <?php $counter = 0; ?>
                            <?php foreach($riwayat as $item): ?>
                            <?php $counter++; ?>
                            <?php if ($counter == 4) break; ?>
                            <?php $data = $pariwisata->get($item['wisata1']); ?>
                            <div class="carousel-item <?= $counter == 1 ? 'active' : '' ?>">
                                <img src="<?= $data['gambar'] ?: 'https://picsum.photos/1200/375' ?>" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <a href="<?= linkWithId('detail', $data['id_wisata']) ?>" style="text-decoration: none; color: white">
                                        <h5><?= $data['nama_wisata'] ?></h5>
                                        <p><?= $data['alamat'] ?></p>
                                    </a>
                                </div>
                            </div>

                            <?php endforeach; ?>


                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>