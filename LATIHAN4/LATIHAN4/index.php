<?php

$servername = "localhost";
$username = "Bilsy-B1";
$password = "5678";
$database = "phpdasar";

$conn = mysqli_connect($servername, $username, $password, $database);
$num = 1;



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

$mhs = query("SELECT * FROM data");




?>


<!DOCUTYPE html>

   <html>

   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <title>HEllo Word</title>
      <link rel="stylesheet" href="../Css/bootstrap.min.css">


   </head>

   <body>

      <h1>Hello World</h1>

      <table class="table table-dark table-striped">
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
            <?php foreach ($mhs as $data) :
            ?>
               <tr>
                  <td><?php echo $num ?></td>
                  <td><?php ?>

                     <a href="" class="btn btn-warning">Hapus</a>
                     <a href="" class="btn btn-warning">Ubah</a>

                  </td>
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








   </body>

   </html>