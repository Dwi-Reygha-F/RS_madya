<?php
include('../koneksi.php'); // Include your database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $spesialis = $_POST['spesialis'];

    // Handle file upload if a new profile picture is uploaded
    if (isset($_FILES['profil']) && $_FILES['profil']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['profil']['tmp_name'];
        $fileName = $_FILES['profil']['name'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Sanitize file name
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

        // Directory where the file will be uploaded
        $uploadFileDir = '../images/';
        $dest_path = $uploadFileDir . $newFileName;

        // Check if the file type is valid (image)
        $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');
        if (in_array($fileExtension, $allowedfileExtensions)) {
            // Move the file to the directory
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                // If the upload is successful, update the doctor record with the new profile picture
                $query = "UPDATE dokter SET nama = ?, spesialis = ?, foto = ? WHERE id = ?";
                $stmt = $koneksi->prepare($query);
                if ($stmt === false) {
                    die('Prepare failed: ' . $koneksi->error);
                }
                $stmt->bind_param('sssi', $nama, $spesialis, $newFileName, $id);
            } else {
                echo 'There was an error moving the uploaded file.';
                exit;
            }
        } else {
            echo 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
            exit;
        }
    } else {
        // If no file is uploaded, only update the name and specialization
        $query = "UPDATE dokter SET nama = ?, spesialis = ? WHERE id = ?";
        $stmt = $koneksi->prepare($query);
        if ($stmt === false) {
            die('Prepare failed: ' . $koneksi->error);
        }
        $stmt->bind_param('ssi', $nama, $spesialis, $id);
    }

    // Execute the query
    if ($stmt->execute()) {
        // Redirect back to the doctor menu after successful update
        header('Location: ../dokter.php?status=success');
    } else {
        echo 'Error updating doctor information: ' . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $koneksi->close();
} else {
    // If the form is not submitted correctly
    header('Location: ../dokter.php?status=error');
}
?>
