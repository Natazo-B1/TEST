<?php
require "function.php";
$id = $_GET["id"];
$mhs = query("SELECT * FROM data WHERE id='$id'")[0];
function ubah($data)
{

    global $conn;
    global $id;

    $nama    = htmlspecialchars($data["nama"]);
    $nrp     = htmlspecialchars($data["nrp"]);
    $email   = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar  = htmlspecialchars($data["gambar"]);
    $query   =  "UPDATE data SET nama='$nama',nrp = '$nrp',email = '$email',jurusan='$jurusan',gambar='$gambar' WHERE id=$id ";
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}
if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "<script>alert('Data Berhasil Ditambahkan');
        document.location = 'index.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Ditambahkan');
            document.location = 'index.php';</script>";
    }
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

<body>
    <div class="container text-center">
        <div class="card bg-dark p-3 text-light">
            <h1 class="card-title">ADD DATA</h1>
            <div class="form-group">
                <form action="" method="post" aria-required="require">
                    <label for="nama" class="form-label">Nama</label>
                    <input value=<?php echo $mhs["nama"]; ?> class="form-control" type="text" name="nama" id="nama" required>
                    <label for="email">Email</label>
                    <input value=<?php echo $mhs["email"]; ?> type="text" name="email" id="email" class="form-control" required>
                    <label for="nrp">Nrp</label>
                    <input type="text" name="nrp" id="nrp" class="form-control" value=<?php echo $mhs["nrp"]; ?> required>
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input value=<?php echo $mhs["jurusan"]; ?> class="form-control" type="text" name="jurusan" id="jurusan" required>
                    <label for="gambar" class="form-label">Gambar</label>
                    <input value=<?php echo $mhs["gambar"]; ?> class="form-control" type="text" name="gambar" id="gambar" required>
                    <button type="submit" class="btn btn-primary mt-3" name="submit">Send</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>