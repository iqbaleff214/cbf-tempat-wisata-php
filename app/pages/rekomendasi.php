<?php 

$pariwisata = new Table('pariwisata', 'id_wisata');

$prokes = new Table('prokes', 'id_prokes');
$biaya = new Table('biaya');
$rating = new Table('rating');
$parkir_mobil = new Table('parkir_mobil');
$parkir_motor = new Table('parkir_motor');
$warung_makan = new Table('warung_makan');
$toilet = new Table('toilet');
$tempat_inap = new Table('tempat_inap');
$sewa_alat = new Table('sewa_alat');

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
    'warung_makan' => [
        '0.5' => 'Tersedia',
        '0.1' => 'Tidak'
    ],
    'toilet' => [
        '0.5' => 'Tersedia',
        '0.1' => 'Tidak'
    ],
    'tempat_inap' => [
        '0.5' => 'Tersedia',
        '0.1' => 'Tidak'
    ],
    'sewa_alat' => [
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
                                        <?php foreach($prokes->getAll() as $val): ?>
                                        <option value="<?= $val['bobot_prokes'] ?>" <?= selected(getOld('prokes'), $val['bobot_prokes']) ?> ><?= $val['nama_prokes'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="biaya">Biaya Masuk</label>
                                    <select class="custom-select form-control" id="biaya" name="biaya">
                                        <?php foreach($biaya->getAll() as $val): ?>
                                        <option value="<?= $val['bobot_biaya'] ?>" <?= selected(getOld('biaya'), $val['bobot_biaya']) ?> ><?= $val['nama_biaya'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="rating">Rating</label>
                                    <select class="custom-select form-control" id="rating" name="rating">
                                        <?php foreach($rating->getAll() as $val): ?>
                                        <option value="<?= $val['bobot_rating'] ?>" <?= selected(getOld('rating'), $val['bobot_rating']) ?> ><?= $val['nama_rating'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="parkir_mobil">Parkir Mobil</label>
                                    <select class="custom-select form-control" id="parkir_mobil" name="parkir_mobil">
                                        <?php foreach($parkir_mobil->getAll() as $val): ?>
                                        <option value="<?= $val['bobot_parkirmobil'] ?>" <?= selected(getOld('parkir_mobil'), $val['bobot_parkirmobil']) ?> ><?= $val['nama_parkirmobil'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="parkir_motor">Parkir Sepeda Motor</label>
                                    <select class="custom-select form-control" id="parkir_motor" name="parkir_motor">
                                        <?php foreach($parkir_motor->getAll() as $val): ?>
                                        <option value="<?= $val['bobot_parkirmotor'] ?>" <?= selected(getOld('parkir_motor'), $val['bobot_parkirmotor']) ?> ><?= $val['nama_parkirmotor'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="warung_makan">Tempat Makan</label>
                                    <select class="custom-select form-control" id="warung_makan" name="warung_makan">
                                        <?php foreach($warung_makan->getAll() as $val): ?>
                                        <option value="<?= $val['bobot_warung'] ?>" <?= selected(getOld('warung_makan'), $val['bobot_warung']) ?> ><?= $val['nama_warung'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="toilet">Toilet</label>
                                    <select class="custom-select form-control" id="toilet" name="toilet">
                                        <?php foreach($toilet->getAll() as $val): ?>
                                        <option value="<?= $val['bobot_toilet'] ?>" <?= selected(getOld('toilet'), $val['bobot_toilet']) ?> ><?= $val['nama_toilet'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="tempat_inap">Penginapan</label>
                                    <select class="custom-select form-control" id="tempat_inap" name="tempat_inap">
                                        <?php foreach($tempat_inap->getAll() as $val): ?>
                                        <option value="<?= $val['bobot_tempatinap'] ?>" <?= selected(getOld('tempat_inap'), $val['bobot_tempatinap']) ?> ><?= $val['nama_tempatinap'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="sewa_alat">Penyewaan Alat Kemah</label>
                                    <select class="custom-select form-control" id="sewa_alat" name="sewa_alat">
                                        <?php foreach($sewa_alat->getAll() as $val): ?>
                                        <option value="<?= $val['bobot_sewaalat'] ?>" <?= selected(getOld('sewa_alat'), $val['bobot_sewaalat']) ?> ><?= $val['nama_sewa'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(hasOld()) removeOld(); ?>
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
                        <?php if($no == 4) break; ?>
                        <?php $item = $pariwisata->get($key); ?>
                        <div class="col-12 col-sm-6 col-lg-4 mb-5">
                            <a href="<?= linkWithId('detail', $item['id_wisata']) ?>" style="text-decoration: none;">
                                <h5 class="text-center font-weight-bold"><span class="badge badge-pill badge-primary"><?= $no++ ?></span> <?= $item['nama_wisata'] ?></h5>
                                <div class="card bg-dark text-white my-4">
                                    <img src="<?= $item['gambar'] ?: 'https://picsum.photos/1200/750' ?>" class="card-img" alt="<?= $item['nama_wisata'] ?>">
                                </div>
                                <p class="text-muted text-center"><?= $item['alamat'] ?></p>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

</div>