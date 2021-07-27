<?php 

$opsiForm = [
    'prokes' => [
        '0.5' => 'Menerapkan',
        '0.1' => 'Tidak',
    ],
    'biaya' => [
        '0.8' => 'Rp0 - Rp20.000',
        '0.7' => 'Rp20.000 - Rp50.000',
        '0.6' => 'Rp50.000 - Rp70.000',
        '0.5' => 'Rp70.000 - Rp100.000',
        '0.4' => 'Rp100.000 - Rp150.000',
        '0.3' => 'Rp150.000 - Rp200.000',
        '0.2' => 'Rp200.000 - Rp500.000',
        '0.1' => '> Rp500.000',
    ],
    'rating' => [
        '0.5' => '5',
        '0.4' => '4',
        '0.3' => '3',
        '0.2' => '2',
        '0.1' => '1',
        '0.0' => '0',
    ],
    'parkir_mobil' => [
        '0.5' => 'Tersedia',
        '0.1' => 'Tidak'
    ],
    'parkir_motor' => [
        '0.5' => 'Tersedia',
        '0.1' => 'Tidak'
    ],
    'warung' => [
        '0.5' => 'Tersedia',
        '0.1' => 'Tidak'
    ],
    'toilet' => [
        '0.5' => 'Tersedia',
        '0.1' => 'Tidak'
    ],
    'penginapan' => [
        '0.5' => 'Tersedia',
        '0.1' => 'Tidak'
    ],
    'alat_kemah' => [
        '0.5' => 'Tersedia',
        '0.1' => 'Tidak'
    ],
];

?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <form action="<?= actionTo('rekomendasi', 'recommendation'); ?>" method="POST">
            <div class="card shadow mb-4">
                <!-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Indikator Tempat Wisata</h6>
                </div> -->
                <a href="#formTempatWisata" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="formTempatWisata">
                    <h6 class="m-0 font-weight-bold text-primary">Indikator Tempat Wisata</h6>
                </a>
                <div class="collapse show" id="formTempatWisata">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="prokes">Protokol Kesehatan</label>
                                    <select class="custom-select form-control" id="prokes" name="prokes">
                                        <?php foreach($opsiForm['prokes'] as $key => $val): ?>
                                        <option value="<?= $key ?>"><?= $val ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="biaya">Biaya Masuk</label>
                                    <select class="custom-select form-control" id="biaya" name="biaya">
                                        <?php foreach($opsiForm['biaya'] as $key => $val): ?>
                                        <option value="<?= $key ?>"><?= $val ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="rating">Rating</label>
                                    <select class="custom-select form-control" id="rating" name="rating">
                                        <?php foreach($opsiForm['rating'] as $key => $val): ?>
                                        <option value="<?= $key ?>"><?= $val ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="parkir_mobil">Parkir Mobil</label>
                                    <select class="custom-select form-control" id="parkir_mobil" name="parkir_mobil">
                                        <?php foreach($opsiForm['parkir_mobil'] as $key => $val): ?>
                                        <option value="<?= $key ?>"><?= $val ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="parkir_motor">Parkir Sepeda Motor</label>
                                    <select class="custom-select form-control" id="parkir_motor" name="parkir_motor">
                                        <?php foreach($opsiForm['parkir_motor'] as $key => $val): ?>
                                        <option value="<?= $key ?>"><?= $val ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="warung">Tempat Makan</label>
                                    <select class="custom-select form-control" id="warung" name="warung">
                                        <?php foreach($opsiForm['warung'] as $key => $val): ?>
                                        <option value="<?= $key ?>"><?= $val ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="toilet">Toilet</label>
                                    <select class="custom-select form-control" id="toilet" name="toilet">
                                        <?php foreach($opsiForm['toilet'] as $key => $val): ?>
                                        <option value="<?= $key ?>"><?= $val ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="penginapan">Penginapan</label>
                                    <select class="custom-select form-control" id="penginapan" name="penginapan">
                                        <?php foreach($opsiForm['penginapan'] as $key => $val): ?>
                                        <option value="<?= $key ?>"><?= $val ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="alat_kemah">Penyewaan Alat Kemah</label>
                                    <select class="custom-select form-control" id="alat_kemah" name="alat_kemah">
                                        <?php foreach($opsiForm['alat_kemah'] as $key => $val): ?>
                                        <option value="<?= $key ?>"><?= $val ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Cari Tempat Wisata</button>
                        <button type="reset" class="btn btn-secondary float-right">Reset</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    <?php if(hasFlash()): ?>                                            
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Hasil Rekomendasi</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php $no = 1; ?>
                        <?php foreach(getFlash() as $key => $val): ?>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <h5 class="text-center"><span class="badge badge-pill badge-primary"><?= $no++ ?></span> <?= $key ?></h5>
                            <div class="card bg-dark text-white my-4">
                                <img src="https://picsum.photos/1200/750" class="card-img" alt="tempat">
                            </div>
                            <p class="text-muted text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, quam.</p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

</div>