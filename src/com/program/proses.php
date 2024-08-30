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
      $id = $_POST['id'];
      $namaLengkap = $_POST['nama_lengkap'];
      $jenisKelamin = $_POST['jenis_kelamin'];



      $queryShow = "SELECT * FROM tb_profil
      WHERE id = '$id'";
      $sqlShow = mysqli_query($database->connect, $queryShow);
      $result = mysqli_fetch_assoc($sqlShow);
      if($_FILES['foto']['name'] == '')
      {
        $foto = $result['foto'];
      }
      else
      {
        $foto = $_FILES['foto']['name'];
        unlink('img/foto-baru/' . $result['foto']);
        move_uploaded_file($_FILES['foto']['tmp_name'], 'img/foto-ubah/' . $_FILES['foto']['name']);
      }

      
      $query = "UPDATE tb_profil SET nama_lengkap = '$namaLengkap', jenis_kelamin = '$jenisKelamin', foto = '$foto' WHERE id = '$id'";
      
      $sql = mysqli_query($database->connect, $query);




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
            // document.location.href = 'index.php';
          </script>";
  }
?>