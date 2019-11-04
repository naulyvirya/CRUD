<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10" style="padding:20px;">
                <div class="card border-primary">
                    <div class="card-header">BIODATA</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Tanggal Lahir</th>
                                <th>Umur</th>
                                <th colspan="3"><center>Aksi</center></th>
                            </tr>
                            <?php
                            include '../database.php';
                            $biodata = new Biodata();
                            $no = 1;
                            foreach ($biodata->index() as $data) {
                                ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                                <td><?php echo $data['jenis_kelamin']; ?></td>
                                <td><?php echo $data['agama']; ?></td>
                                <td><?php echo $data['tgl_lahir']; ?></td>
                                <td><?php echo $data['umur']; ?></td>
                                <td><a href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-primary btn-block:">Show</a></td>
                                <td><a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-warning btn-block:">Edit</a></td>
                                <td>
                                <a class="btn btn-outline-danger btn-block:" href="proses.php?id=<?php echo $data['id']; ?> &aksi=delete"
                                onclick="return confirm('Apakah Anda Yakin Mau Menghapus Data Ini ?')">Delete</a>
                                </td>
                            </tr>
                            <?php

                        }
                        ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>