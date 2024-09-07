<?php
include('../koneksi.php'); // Include your database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the ID of the doctor to delete
    $id = $_POST['id'];

    // Retrieve the current profile picture to delete from the filesystem
    $query = "SELECT foto FROM dokter WHERE id = ?";
    $stmt = $koneksi->prepare($query);
    if ($stmt === false) {
        die('Prepare failed: ' . $koneksi->error);
    }
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->bind_result($foto);
    $stmt->fetch();
    $stmt->close();

    // Delete the doctor record
    $query = "DELETE FROM dokter WHERE id = ?";
    $stmt = $koneksi->prepare($query);
    if ($stmt === false) {
        die('Prepare failed: ' . $koneksi->error);
    }
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        // If deletion is successful, delete the profile picture file if it exists
        if (!empty($foto) && file_exists('../images/' . $foto)) {
            unlink('../images/' . $foto);
        }
        // Redirect back to the doctor menu after successful deletion
        header('Location: ../dokter.php?status=success');
    } else {
        echo 'Error deleting doctor information: ' . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $koneksi->close();
} else {
    // If the form is not submitted correctly
    header('Location: ../dokter.php?status=error');
}
?>
