<?php $tb = new Table('jurusan', 'id_jurusan'); ?>

<div class="container mt-5">
    <?php if(hasFlash()): ?>
    <div class="alert alert-<?= darkMode(true) ?> alert-dismissible fade show" role="alert">
        <?= getFlash(); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <form class="row g-3" action="" method="GET">
        <input type="hidden" name="page" value="jurusan">
        <div class="col-auto">
            <label for="q" class="visually-hidden">Pencarian</label>
            <input type="text" class="form-control" id="q" placeholder="Pencarian" name="q" autocomplete="off">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-<?= darkMode(true) ?> mb-3">Cari</button>
        </div>
    </form>
    <a href="<?= linkTo('jurusan_tambah'); ?>" class="btn btn-<?= darkMode(true) ?> mb-3">Tambah</a>
    <table class="table table-bordered">
        <thead class="table-<?= darkMode() ?> text-center">
            <tr>
                <th style="width: 50px;">Kode</th>
                <th>Jurusan</th>
                <th>Keterangan</th>
                <th style="width: 200px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach( isset($_GET['q']) ? $tb->getLike(['id_jurusan' => $_GET['q'], 'nama_jurusan' => $_GET['q']]) : $tb->getAll() as $item): ?>
            <tr>
                <td class="text-center"><?= $item['id_jurusan']; ?></td>
                <td><?= $item['nama_jurusan']; ?></td>
                <td><?= $item['ket'] ?: '-'; ?></td>
                <td class="text-center">
                    <a href="<?= linkWithId('jurusan_detail', $item['id_jurusan']); ?>" class="btn btn-success btn-sm">Lihat</a>
                    <a href="<?= linkWithId('jurusan_edit', $item['id_jurusan']); ?>" class="btn btn-primary btn-sm">Edit</a>
                    <form action="<?= actionTo('jurusan', 'delete'); ?>" class="d-inline" method="POST">
                        <input type="hidden" name="id" value="<?= $item['id_jurusan']; ?>">
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>