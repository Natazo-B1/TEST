<?php

require "function.php";

$id = $_GET["id"];
if (hapus($id) > 0) {
    echo "<script>alert('Data Berhasil Dihapus');
            document.location = 'index.php';</script>";
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