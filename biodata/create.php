<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Biodata</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8" style="padding:20px;">
                <div class="card border-primary">
                    <div class="card-header">Input Biodata</div>
                    <div class="card-body">
                        <div class="form-group">
                            <form action="/biodata/proses.php?aksi=tambah" method="post">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" required><br>

                                <label>Alamat</label>
                                <textarea name="alamat" cols="40" class="form-control" required></textarea><br>

                                <label>Jenis Kelamin</label>
                                <input type="radio" name="jenis_kelamin" class="radio-inline" value="Laki-laki" checked>Laki-laki
                                <input type="radio" name="jenis_kelamin" class="radio-inline" value="Perempuan">Perempuan <br> <br>
                                    
                                <label>Agama</label>
                                <select name="agama" class="form-control">
                                    <option value="Islam">Islam</option>
                                    <option value="Protestand">Kristen</option>
                                    <option value="Konghucu">Katolik</option>
                                    <option value="Buddha">Hindu</option>
                                    <option value="Katholik">Buddha</option>
                                    <option value="Katholik">Konghucu</option>
                                </select><br>

                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl" required>
                                    <br>
                                    <button class="btn btn-outline-primary btn-block:" name="save">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>