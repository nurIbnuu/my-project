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
            <h1 class="text-end font-monospace fw-bold text-body-secondary">Halaman
              <?php if(isset($_GET['ubah'])) : ?>
                Update
              <?php else : ?>
                Create
              <?php endif; ?>
            </h1>
          </a>
        </div>
      </div>
    </div>
    
    <!-- Form -->
    <form action="proses.php" method="post" enctype="multipart/form-data">

      <div class="p-3 mb-2 bg-body-secondary text-dark-emphasis rounded border border-4">

        <!-- Foto -->
        <div class="mb-3 row">
          <div class="col-sm-2">
            <label for="foto">Foto</label>
          </div>
          <div class="col-sm-10">
            <input required type="file" class="form-control" id="foto" name="foto" accept="image/*">
          </div>
        </div>
        <!-- Nama Lengkap -->
        <div class="mb-3 row">
          <div class="col-sm-2">
            <label for="nama_lengkap">Nama Lengkap</label>
          </div>
          <div class="col-sm-10">
            <input required type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
          </div>
        </div>
        <!-- Jenis Kelamin -->
        <div class="mb-3 row">
          <div class="col-sm-2">
            <label for="jenis_kelamin">Jenis Kelamin</label>
          </div>
          <div class="col-sm-10">
            <select required class="form-select" id="jenis_kelamin" name="jenis_kelamin">
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <!-- Tombol Submit -->
        <div class="row">
          <div class="col text-end">
            <?php if(isset($_GET['ubah'])) : ?>
              <button type="submit" class="btn btn-light border border-4 btn-md text-body-secondary" role="button" name="aksi" value="ubah">
                <i class="bi bi-pen"></i>
                Ubah
              </button>
            <?php else : ?>
              <button type="submit" class="btn btn-light border border-4 btn-md text-body-secondary" role="button" name="aksi" value="tambah">
                <i class="bi bi-file-plus"></i>
                Tambah
              </button>
            <?php endif; ?>
          </div>
        </div>

      </div>

    </form>

  </div>

</body>
</html>