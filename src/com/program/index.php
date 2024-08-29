<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <title>PHP OOP - CRUD 1</title>
</head>
<body>

  <div class="container mt-3">
    <!-- Header -->
    <div class="p-3 mb-2 bg-body-secondary text-dark-emphasis rounded border border-4">
      <div class="row">
        <div class="col">
          <a class="btn btn-light border border-4 btn-lg text-body-secondary" href="tambah-ubah.php" role="button">
            <i class="bi bi-file-plus"></i>
            Tambah
          </a>
        </div>
        <div class="col">
          <a href="#" class="text-reset text-decoration-none">
            <h1 class="text-end font-monospace fw-bold text-body-secondary">Halaman Read</h1>
          </a>
        </div>
      </div>
    </div>

    <!-- Table -->
    <div class="p-3 pb-1 mb-2 bg-body-secondary text-dark-emphasis rounded border border-4">
      <div class="table-responsive">
        <table class="table table-hover table-bordered text-center table-light">
          <thead>
            <tr>
              <th scope="col" class="text-body-secondary">Nomor</th>
              <th scope="col" class="text-body-secondary">Foto</th>
              <th scope="col" class="text-body-secondary">Nama Lengkap</th>
              <th scope="col" class="text-body-secondary">Jenis Kelamin</th>
              <th scope="col" class="text-body-secondary">Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php
              include 'koneksi.php';
              $no = 0;
              $dataData = $database->read();

              foreach($dataData as $data) :
            ?>
              <tr>
                <th scope="row" class="text-body-secondary fs-6"><?= ++$no; ?></th>
                <td class="text-body-secondary">
                  <img src="img/<?= $data['foto']; ?>" width="40" alt="Foto Profil">
                </td>
                <td class="text-body-secondary fs-6"><?= $data['nama_lengkap']; ?></td>
                <td class="text-body-secondary fs-6"><?= $data['jenis_kelamin']; ?></td>
                <!-- Aksi -->
                <td class="text-body-secondary">
                  <a href="detail.php?id=<?= $data['id']; ?>" class="btn btn-link text-decoration-none text-body-secondary pt-0" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem;">
                    <i class="bi bi-book"></i>
                    Detail
                  </a>
                  <a href="tambah-ubah.php?ubah=<?= $data['id']; ?>" class="btn btn btn-link text-decoration-none text-body-secondary pt-0" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem;">
                    <i class="bi bi-pen"></i>
                    Ubah
                  </a>
                  <a href="proses.php?hapus=<?= $data['id']; ?>" class="btn btn btn-link text-decoration-none text-body-secondary pt-0" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem;" onclick="return confirm('Hapus Data?')">
                    <i class="bi bi-trash"></i>
                    Hapus
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>
</html>