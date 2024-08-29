<?php
  include 'koneksi.php';

  // Tambah dan Ubah
  if(isset($_POST['aksi']))
  {
    if($_POST['aksi'] == 'tambah')
    {
      $database->create($_FILES['foto']['name'], $_POST['nama_lengkap'], $_POST['jenis_kelamin']);

      echo "<script>
              alert('Data Ditambah');
              document.location.href = 'index.php';
            </script>";
    }
    elseif($_POST['aksi'] == 'ubah')
    {
      echo "<script>
              alert('Data Diubah');
              document.location.href = 'index.php';
            </script>";
    }
  }

  
  // Hapus
  if(isset($_GET['hapus']))
  {
    $database->delete($_GET['hapus']);

    echo "<script>
            alert('Data Dihapus');
            document.location.href = 'index.php';
          </script>";
  }
?>