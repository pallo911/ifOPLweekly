<?php


require 'fungsi.php';
$qmahasiswa = "SELECT * FROM mahasiswa";
$mahasiswas = tampildata($qmahasiswa); // wadah dengan data mahssiswa




// $koneksi = mysqli_connect("localhost","root","","ifOPLweekly");
// if($koneksi)
// {
  // echo "BERHASIL";
// }


// $query = "SELECT * FROM mahasiswa";
// $result = mysqli_query($koneksi, $query);

//ambil data mahasiswa (fatch) dari lemari

//mysqli_fatch_row
//mysqli_fatch_assoc
//mysqli_fatch_object
//mysqli_fatch_array

// while ($mhs = mysqli_fetch_array($result))
//   {
//   var_dump($mhs);
//   }

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets\css\style.css">
    
    
    <title>Data Mahasiwa</title>
  </head>
  <body>
    <h1>WEB INFORMATIKA</h1>
    <hr />
    <table class ="mh" border="1px" cellspacing="0" cellpadding="10">
      <tr>
        <td>
          <a href="index.php">Home</a>
        </td>
        <td>
          <a href="profile.php">Profile</a>
        </td>
        <td>
          <a href="contact.php">Contact</a>
        </td>
        <td>
          <a href="Mahasiswa.php">Data Mahasiswa</a>
        </td>
        <td>
          <a href="Inputdata.php">Input Data Mahasiswa</a>
        </td>
      </tr>
    </table>
    <h2>Data Mahasiswa</h2>
    <a href="Inputdata.php">
      <button>Input data mahasiswa</button>
    </a>

    <table class="mahasiswa" border="1" cellpadding="5px">
      <tr>
        <th >No</th>
        <th >Nama</th>
        <th >NIM</th>
        <th >Jurusan</th>
        <th >Email</th>
        <th> No. Hp </th>
        <th> foto</th>
      </tr>
      <?php
      $i = 1;
      // while($mhs = mysqli_fetch_assoc($result))
      //   {
      foreach($mahasiswas as $mhs)
        {
      ?>
      
      <tr>
        <td align="center">1</td>
        <td><?php echo $mhs["nama"]?></td>
        <td align="center"><?php echo $mhs["nim"]?></td>
        <td><?php echo $mhs["jurusam"]?></td>
        <td align="center"><?php echo $mhs["email"]?></td>
        <td align="center"><?php echo $mhs["no_hp"]?></td>
        <td align="center"><img src="assets/images/<?php echo $mhs["foto"] ?>" width="70px"/></td>
        <td><a href="editdata.php"><button>Edit</button></a> <a href="deletedata.php"><button>delete</button></a></td>
      </tr>
      <?php 
      // $i++;
      
        }
      ?>
    </table>
    <br />
    <hr />
    <table class="mahasiswa" border="1" cellpadding="5px">
      <tr>
        <td>50</td>
        <td>59</td>
        <td>50</td>
        <td>52</td>
      </tr>
      <tr>
        <td>50</td>
        <td colspan="2" rowspan="2">FAAAH</td>

        <td>52</td>
      </tr>
      <tr>
        <td>60</td>
        <td>50</td>
      </tr>
      <tr>
        <td>50</td>
        <td>59</td>
        <td>50</td>
        <td>52</td>
      </tr>
    </table>
  </body>
</html>
