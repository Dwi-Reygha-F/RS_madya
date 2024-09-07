<?php
include ('../koneksi.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    // Prepare SQL statement to delete record
    $sql = "DELETE FROM user WHERE id='$id'";

    if ($koneksi->query($sql) === TRUE) {
        // Record deleted successfully, redirect to the user data page
        header("Location: ../pengguna.php"); // Replace with the actual path to your user data page
        exit(); // Make sure to exit after the redirect
    } else {
        echo "Error deleting record: " . $koneksi->error;
    }

    $koneksi->close();
}
?>
