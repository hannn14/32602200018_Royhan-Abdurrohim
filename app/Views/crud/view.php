<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="title">
        <h1>Data Mahasiswa</h1>
        <a href="/crud/tambah"><button>Tambah Data</button></a>
    </div>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Prodi</th>
                <th>Universitas</th>
                <th>No HP</th>
                <th>Action</th>
            </tr>
            <?php
      if (empty($mahasiswa)) { ?>
            <tr>
                <td colspan="7">Tidak ada data</td>
            </tr>
            <?php } else {
      $i = 1;
      foreach ($mahasiswa as $data) { ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['nim']; ?></td>
                <td><?= $data['prodi']; ?></td>
                <td><?= $data['universitas']; ?></td>
                <td><?= $data['nomor_handphone']; ?></td>
                <td class="action">
                    <a href="/crud/hapus/<?= $data['nim'] ?>">
                        <button class="btn-delete"
                            onclick="return confirm('Are you sure to delete nim <?= $data['nim'] ?>?')">Delete</button>
                    </a>
                    <a href="/crud/edit/<?= $data['nim'] ?>">
                        <button class="btn-update">Update</button>
                    </a>
                </td>
            </tr>
            <?php }
      } ?>
        </table>
    </div>
</main>
<?= $this->endSection(); ?>