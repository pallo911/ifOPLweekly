<?php

$koneksi = mysqli_connect("localhost","root","","ifOPLweekly");


function tampildata($query)
{
    global $koneksi;

    $result = mysqli_query($koneksi,$query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }

        return $rows;

}

function inputdata($data,$foto)
{
    global $koneksi;

$nama = htmlspecialchars ( $data["nama"]);
$nim = htmlspecialchars($data["Nim"]);
$prodi = htmlspecialchars($data["jurusan"]);
$email = htmlspecialchars($data["email"]);
$nohp = htmlspecialchars($data["nohp"]);


$namafoto= $foto["name"];
$newnamefoto = date('dmYhis_').$namafoto;
$tmpfoto = $foto["tmp_name"];

$path = "assets/images/$newnamefoto";
if(move_uploaded_file($tmpfoto,$path))
    {
        $query ="INSERT INTO mahasiswa (nama,nim,jurusam,email,no_hp,foto)
    VALUES('$nama','$nim','$prodi','$email','$nohp','$newnamefoto')";
    
    
    mysqli_query($koneksi,$query);

    }

    

    return mysqli_affected_rows($koneksi);

}

function deletedata($id)
{
    global $koneksi;
    $query = "DELETE FROM mahasiswa WHERE id=$id";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}


function editdata($data,$id)
{
    global $koneksi;

$nama = htmlspecialchars ( $data["nama"]);
$nim = htmlspecialchars($data["Nim"]);
$prodi = htmlspecialchars($data["jurusan"]);
$email = htmlspecialchars($data["email"]);
$nohp = htmlspecialchars($data["nohp"]);
$foto = htmlspecialchars($data["Foto"]);

    $query ="INSERT INTO mahasiswa (nama,nim,jurusam,email,no_hp,foto)
    VALUES('$nama','$nim','$prodi','$email','$nohp','$foto')";
    
    $query = "UPDATE mahasiswa SET
                nama='$nama',
                nim= '$nim',
                jurusam= '$prodi',
                email='$email',
                no_hp='$nohp',
                foto='$foto'
                WHERE id=$id

    
    ";

    mysqli_query($koneksi,$query);
    
    return mysqli_affected_rows($koneksi);

}

function register($data)
{
    global $koneksi;

    $username = stripslashes($data["username"]); ///beda semua
    $password1 = mysqli_real_escape_string($koneksi,$data["password1"]);
    $password2 = mysqli_real_escape_string($koneksi,$data["password2"]);
    
if ($password1 != $password2)
    {
        echo"<script>
        alert('konfirmasi pass tidak sesuai');
        </script>";
return false;
    }

    $queryrow = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($koneksi,$queryrow);

    if(mysqli_num_rows($result)== 1)
        {
            echo"<script>
        alert('username sudah digunakan!');
        </script>";
        return false;
        }

    //enkripsi password
    $pass = password_hash($password1, PASSWORD_DEFAULT);

    $query = "INSERT INTO user (username,password) VALUES
    ('$username','$pass')";
    mysqli_query($koneksi,$query);
    return  mysqli_affected_rows($koneksi);
}


function login($data)
{
    global $koneksi;

    $username = mysqli_real_escape_string($koneksi, $data["username"]);
    $password = $data["password"];

    $query  = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            $_SESSION["login"]    = true;
            $_SESSION["id"]       = $row["id"];
            $_SESSION["username"] = $row["username"];
            return true;
        }
    }

    return false;
}
?>