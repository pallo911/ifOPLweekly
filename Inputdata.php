<?php


require 'fungsi.php';
// variable super global $_POST
if(isset($_POST["kirim"]))
  {

$nama = $_POST["nama"];
$nim = $_POST["Nim"];
$prodi = $_POST["jurusan"];
$email = $_POST["email"];
$nohp = $_POST["nohp"];
$foto = $_POST["Foto"];

    $query ="INSERT INTO mahasiswa (nama,nim,jurusam,email,no_hp,foto)
    VALUES('$nama','$nim','$prodi','$email','$nohp','$foto')";
    
    
    mysqli_query($koneksi,$query);
    
    if(mysqli_affected_rows($koneksi))
      {
        echo"
        <script>
        alert('Data berhasil ditambahkan!!');
        window.location.href='Mahasiswa.php';
        </script>";
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\style.css">
   
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    
    <hr />
    
    <table border="1px" cellspacing="0" cellpadding="10">
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
          <a href="Mahasiswa.php">Data Mahasiswa</a>
        </td>
      </tr>
    </table>
    
    <form action="" method="post">
        <table colpadding="5px"  >
            <tr>
                <td><label for="nama">Nama</label> 
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" /></td>
            </tr>
             <tr>
                <td><label for="Nim">Nim</label> 
                    <td>:</td>
                    <td><input type="text" name="Nim" id="Nim" /></td>
            </tr>
             <tr>
                <td><label for="jurusan">Jurusan</label> 
                    <td>:</td>
                    <td><input type="text" name="jurusan" id="jurusan" /></td>
            </tr>   
            <tr>
                <td><label for="email">Email</label> 
                    <td>:</td>
                    <td><input type="email" name="email" id="email" /></td>
            </tr>   
             <tr>
                <td><label for="nohp">No HP</label> 
                    <td>:</td>
                    <td><input type="number" name="nohp" id="nohp" /></td>
            </tr>   
             <tr>
                <td><label for="Foto">Foto</label> 
                    <td>:</td>
                    <td><input type="text" name="Foto" id="Foto" /></td>
            </tr>   
        </table>
        <button type="submit" name="kirim" >Tambah Data</button>
        
    </form>
    
    