<?php 

  class Manusia
  {

    // Property Koneksi Database
    public  $hostname = 'localhost',
            $username = 'root',
            $password = '',
            $database = 'db_manusia',
            $connect;
    // Property db_manusia
    public string $namaLengkap = 'Tidak ada Nama Lengkap',
                  $jenisKelamin = 'Tidak ada Jenis Kelamin';


    // Method Construct
    public function __construct()
    {
      $this->connect = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);

      mysqli_select_db($this->connect, $this->database);
    }

    // Method Read
    public function read() : array
    {
      $query = "SELECT * FROM tb_profil";
      $dataData = mysqli_query($this->connect, $query);
      $result = mysqli_fetch_all($dataData, MYSQLI_ASSOC);

      return $result;
    }
    // Method Read Detail
    public function readDetailAndUpdate($id) : array
    {
      $query = "SELECT * FROM tb_profil WHERE id = '$id'";
      $data = mysqli_query($this->connect, $query);
      $result = mysqli_fetch_all($data, MYSQLI_ASSOC);

      return $result;
    }

    // Method Create
    public function create($foto, $namaLengkap, $jenisKelamin)
    {
      $query = "INSERT INTO tb_profil
                VALUES ('', '$foto', '$namaLengkap', '$jenisKelamin')";

      mysqli_query($this->connect, $query);
    }

    // Method Delete
    public function delete($id)
    {
      $query = "DELETE FROM tb_profil
                WHERE id = '$id'";

      mysqli_query($this->connect, $query);
    }


    
  }