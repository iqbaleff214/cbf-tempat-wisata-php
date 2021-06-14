<?php $tb = new Table('jurusan', 'id_jurusan'); ?>
<?php $item = $tb->get($_GET['id']); ?>

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-4">
                <a href="<?= linkTo('jurusan'); ?>" class="btn btn-outline-<?= darkMode(true) ?>">Kembali</a>
            </h5>
            <dl class="card-text">
                <dt>Kode Jurusan</dt>
                <dd><?= $item['id_jurusan']; ?></dd>
                <dt>Nama Jurusan</dt>
                <dd><?= $item['nama_jurusan']; ?></dd>
                <dt>Keterangan</dt>
                <dd><?= $item['ket'] ?: '-'; ?></dd>
            </dl>
        </div>
    </div>
</div>