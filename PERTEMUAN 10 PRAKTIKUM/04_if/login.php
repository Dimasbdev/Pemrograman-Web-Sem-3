<?php 
$usermame = $_POST['username'];
$password = $_POST['pass'];
if ((($usermame == "joko") && ($password == "passjoko")) || 
    (($usermame == "amir") && ($password == "passamir"))) {
    echo "Login Berhasil";
} else {
    echo "Login Gagal";
}
?>