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
          <a class="btn btn-light border border-4 btn-lg text-body-secondary" href="index.php" role="button">
            <i class="bi bi-backspace"></i>
            Kembali
          </a>
        </div>
        <div class="col">
          <a href="#" class="text-reset text-decoration-none">
            <h1 class="text-end font-monospace fw-bold text-body-secondary">Halaman Read</h1>
          </a>
        </div>
      </div>
    </div>

    <!-- Detail -->
    <div class="p-3 pb-2 mb-2 bg-body-secondary text-dark-emphasis rounded border border-4">
      <?php
        include 'koneksi.php';
        $dataData = $database->readDetailAndUpdate($_GET['id']);

        foreach($dataData as $data) :
      ?>
        <!-- Nomor -->
        <div class="mb-3 row text-center">
          <div class="col-sm-4">
            Nomor
          </div>
          <div class="col-sm-4">
            <=>
          </div>
          <div class="col-sm-4">
            <?= $data['id']; ?>
          </div>
        </div>
        <!-- Foto -->
        <div class="mb-3 row text-center">
          <div class="col-sm-4">
            Foto
          </div>
          <div class="col-sm-4">
            <=>
          </div>
          <div class="col-sm-4">
          <img src="img/3/<?= $data['foto']; ?>" width="70" class="img-thumbnail" alt="Foto Profil">
          </div>
        </div>
        <!-- Nama Lengkap -->
        <div class="mb-3 row text-center">
          <div class="col-sm-4">
            Nama Lengkap
          </div>
          <div class="col-sm-4">
            <=>
          </div>
          <div class="col-sm-4">
            <?= $data['nama_lengkap']; ?>
          </div>
        </div>
        <!-- Jenis Kelamin -->
        <div class="mb-3 row text-center">
          <div class="col-sm-4">
            Jenis Kelamin
          </div>
          <div class="col-sm-4">
            <=>
          </div>
          <div class="col-sm-4">
            <?= $data['jenis_kelamin']; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>

</body>
</html>