<?php
require "function.php";

if (isset($_POST["submit"])) {

    if (add($_POST) > 0) {
        echo "<script>alert('Data Berhasil Ditambahkan');
        document.location = 'index.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Ditambahkan');
            document.location = 'index.php';</script>";
    }
}
// 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center">
        <div class="card bg-dark p-3 text-light">
            <h1 class="card-title">ADD DATA</h1>
            <div class="form-group">
                <form action="" method="post" aria-required="require" enctype="multipart/form-data">
                    <label for="nama" class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama" id="nama" required>
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control" type="text" name="email" id="email" required>
                    <label for="nrp" class="form-label">Nrp</label>
                    <input class="form-control" type="text" name="nrp" id="nrp" required>
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input class="form-control" type="text" name="jurusan" id="jurusan" required>
                    <label for="gambar" class="form-label">Nrp</label>
                    <input class="form-control" type="file" name="gambar" id="gambar">
                    <button type="submit" class="btn btn-primary mt-3" name="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>