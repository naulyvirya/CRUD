<?php
class Database
{
    public $host = "localhost", $user = "root", $pass = 123, $db = "xirpl2";
    public $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi) {
            // echo "Berhasil";
        } else {
            echo "Koneksi Database Gagal";
        }
    }
}
// Data tabel siswa
include 'siswa.php';

// Data tabel biodata
include 'biodata.php';

// Data tabel DB
$db = new Database();
?>