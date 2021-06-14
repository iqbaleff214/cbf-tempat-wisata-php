<?php $tb = new Table('jurusan', 'id_jurusan'); ?>
<?php $item = $tb->get($_GET['id']); ?>

<div class="container mt-5">
    <form action="<?= actionWithId('jurusan', 'update', $item['id_jurusan']); ?>" method="POST">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-4">
                <a href="<?= linkTo('jurusan'); ?>" class="btn btn-outline-<?= darkMode(true) ?>">Kembali</a>
            </h5>
            <div class="mb-3 row">
                <label for="id_jurusan" class="col-sm-2 col-form-label">Kode Jurusan</label>
                <div class="col-sm-10">
                    <input type="number" min="0" name="id_jurusan" class="form-control" id="id_jurusan" value="<?= $item['id_jurusan']; ?>" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama_jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_jurusan" class="form-control" id="nama_jurusan" value="<?= $item['nama_jurusan']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ket" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <textarea name="ket" id="ket" cols="10" rows="5" class="form-control"><?= $item['ket']; ?></textarea>
                </div>
            </div>
        </div>
        <div class="card-footer p-3">
            <button type="submit" class="btn btn-<?= darkMode(true) ?>">Simpan</button>
            <button type="reset" class="btn btn-outline-<?= darkMode(true) ?>" onclick="return confirm('Anda yakin ingin mengulangi?')">Ulangi</button>
        </div>
    </div>
    </form>
</div>