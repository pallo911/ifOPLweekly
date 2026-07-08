
<?php


require 'fungsi.php';


$id = $_GET["id"];

$query = "SELECT * FROM mahasiswa WHERE id=$id";

$mhs = tampildata($query)[0];



// variable super global $_POST
if(isset($_POST["kirim"]))

  {


    
    if(editdata($_POST, $id)>0) //query ok
      {
        echo"
        <script>
        alert('Data berhasil diedit!!');
        window.location.href='Mahasiswa.php';
        </script>";
      }
      else{
        echo"
        <script>
        alert('Data berhasil diedit!!');
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
   

    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>

    
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

    <form >
        <table>

            <tr>
                <td><label for="nama">Nama</label> 
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" value="<?= $mhs["nama"]?>" required /></td>
            </tr>
             <tr>
                <td><label for="Nim">Nim</label> 
                    <td>:</td>
                    <td><input type="text" name="Nim" id="Nim" /></td>
            </tr>
             <tr>

                <td><label for="jurusan">Jurusan</label> 
                    <td>:</td>
                    <td><input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusam"]?>" required/></td>
            </tr>   
            <tr>
                <td><label for="email">Email</label> 
                    <td>:</td>
                    <td><input type="email" name="email" id="email" /></td>
            </tr>   
             <tr>
                <td><label for="nohp">No HP</label> 
                    <td>:</td>
                    <td><input type="number" name="nohp" id="nohp" value="<?= $mhs["no_hp"]?>"required/></td>
            </tr>   
             <tr>
                <td><label for="Foto">Foto</label> 
                    <td>:</td>
                    <td><input type="text" name="Foto" id="Foto" value="<?= $mhs["foto"]?>"required/></td>
            </tr>   
        </table>
        <button type="submit" name="kirim" >Edit Data</button>
        

                <td><label for="foto">Foto</label> 
                    <td>:</td>
                    <td><input type="file" name="Foto" id="Foto" /></td>
            </tr>   
            <!-- <tr>
                <td><label for="Nilai">UTS</label> 
                    <td>:</td>
                    <td><input type="text" name="Nilai" id="Nilai" /></td>
            </tr>   
             <tr>
                <td><label for="Nilai">UAS</label> 
                    <td>:</td>
                    <td><input type="text" name="Nilai" id="Nilai" /></td>
            </tr>   
             <tr>
                <td><label for="Nilai">TUGAS</label> 
                    <td>:</td>
                    <td><input type="text" name="Nilai" id="Nilai" /></td>
            </tr>    -->
        </table>

    </form>
    
    