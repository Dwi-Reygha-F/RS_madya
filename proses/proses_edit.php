<?php
include ('../koneksi.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sebagai = $_POST['sebagai'];

    $sql = "UPDATE user SET nama='$nama', username='$username', password='$password', sebagai='$sebagai' WHERE id='$id'";
    
    if ($koneksi->query($sql) === TRUE) {
        // Record updated successfully, redirect to the user data page
        header("Location: ../pengguna.php"); // Replace with the actual path to your user data page
        exit(); // Make sure to exit after the redirect
    } else {
        echo "Error updating record: " . $koneksi->error;
    }
    
    $koneksi->close();
}
?>
