<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);
    $_SESSION['username'] = $data['username'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['id'] = $data['id'];
    $_SESSION['profil'] = $data['profil'];
    $_SESSION['sebagai'] = $data['sebagai'];
    
    header("location:login.php?login=success&sebagai=".$data['sebagai']);
} else {
    // Error handling
    header("location:login.php?login=error");
}

?>
