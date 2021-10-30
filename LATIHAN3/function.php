<?php

$servename = "localhost";
$username  = "STIGER-R1";
$password = "5678";
$database = "phpdasar";

$conn = mysqli_connect($servename, $username, $password, $database);
function conn($query)
{
    $servename = "localhost";
    $username  = "STIGER-R1";
    $password = "5678";
    $database = "phpdasar";

    $conn = mysqli_connect($servename, $username, $password, $database);
    if (!$conn) {
        global $conn;
        die("Connection Error" . mysqli_connect_error($conn));
    } else {
    }
    return mysqli_query($conn, $query);
}
function add($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // upload gambar
    $gambar = upload();

    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO data VALUES('','$nama','$nrp','$email','$jurusan','$gambar')";

    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM data WHERE id ='$id'");

    return mysqli_affected_rows($conn);
}
function query($query)
{
    global $conn;

    $rows = [];
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
function upload()
{
    $namafile = $_FILES["gambar"]["name"];
    $ukuranfile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmpname = $_FILES["gambar"]["tmp_name"];

    // cek apakah tidak ada gambar yang diupload 
    if ($error === 4) {
        echo "<script>alert('pilih gambar terlebih dahulu');</script>";

        return false;

        # code...

    }
    // 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>