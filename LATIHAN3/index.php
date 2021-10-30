<?php
require "function.php";
$mhs = conn("SELECT * FROM data");
$num = 1;

function cari($keyword)
{
    $query = "SELECT * FROM data WHERE 
    nama LIKE '%$keyword%' OR nrp LIKE '%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'
    ";

    return query($query);
}

if (isset($_POST["cari"])) {
    $mhs = cari($_POST["search"]);
}

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
<style>
    img {
        width: 50px;
        height: 50px;
    }

    .w {
        overflow: scroll;
    }
</style>

<body>


    <div class="container text-center text-dark">
        <div class="card bg-warning p-3 text-center ">
            <h1 class="card-title">Daftar Siswa</h1>
            <h2><a href="tambah.php" class="btn btn-dark text-light mt-3 mb 2">Tambah Siswa</a></h2>

            <form action="" method="post">
                <label for="cr" class="form-label"></label>
                <input type="text" name="search" id="cr" class="form-control">
                <button type="submit" name="cari" class="btn btn-dark mt-2">Search</button>
            </form>

            <table class="table table-dark table-striped text-light">
                <thead>
                    <th>No</th>
                    <th>Action</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nrp</th>
                    <th>Jurusan</th>
                    <th>gambar</th>
                </thead>
                <tbody>

                    <?php foreach ($mhs as $data) : ?>

                        <tr>
                            <td><?php echo $num; ?></td>
                            <td>
                                <a href="hapus.php?id=<?php echo $data["id"]; ?>" class="btn btn-warning">Hapus</a> |
                                <a href="ubah.php?id=<?php echo $data["id"]; ?>" class="btn btn-warning">Ubah</a>
                            </td>
                            <td><?php echo $data["nama"]; ?></td>
                            <td><?php echo $data["email"]; ?></td>
                            <td><?php echo $data["nrp"]; ?></td>
                            <td><?php echo $data["jurusan"]; ?></td>
                            <td><img src="../img/<?php echo $data["gambar"]; ?>" alt=""></td>
                        </tr>





                        <?php $num++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>




</body>

</html>