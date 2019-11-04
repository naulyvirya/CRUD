<?php
class Biodata extends Database
{
    // Menampilkan Semua Data
    public function index()
    {
        $biodata = mysqli_query($this->koneksi, "select * from biodata");
        return $biodata;
    }

    // Menambah Data
    public function create($nama, $alamat, $jenis_kelamin, $agama, $tgl_lahir, $umur)
    {
        mysqli_query(
            $this->koneksi,
            "insert into biodata values(null, '$nama', '$alamat', '$jenis_kelamin', 
            '$agama', '$tgl_lahir', '$umur')"
        );
    }

    public function show($id)
    {
        $biodata = mysqli_query($this->koneksi, "select * from biodata where id='$id'");
        return $biodata;
    }

    public function edit($id)
    {
        $biodata = mysqli_query(
            $this->koneksi,
            "select * from biodata where id='$id'"
        );
        return $biodata;
    }

    public function update($id, $nama, $alamat, $jenis_kelamin, $agama, $tgl_lahir, $umur)
    {
        mysqli_query(
            $this->koneksi,
            "update biodata set nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin',
            agama = '$agama', tgl_lahir = '$tgl_lahir', umur = '$umur' where id = '$id'"
        );
    }

    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from biodata where id='$id'");
    }
}
?>