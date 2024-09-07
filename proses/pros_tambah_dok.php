<?php
include '../koneksi.php'; // Adjust the path as needed

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $nama = $_POST['nama'];
    $spesialis = $_POST['spesialis'];

    // Handle file upload
    if (isset($_FILES['profil']) && $_FILES['profil']['error'] == UPLOAD_ERR_OK) {
        $foto = $_FILES['profil']['name'];
        $target_dir = "../images/"; // Adjust path if needed
        $target_file = $target_dir . basename($foto);
        $upload_ok = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file is an image
        $check = getimagesize($_FILES["profil"]["tmp_name"]);
        if ($check !== false) {
            // File is an image
            $upload_ok = 1;
        } else {
            echo "<script>alert('File is not an image.'); window.location.href = '../dokter.php';</script>";
            $upload_ok = 0;
        }

        // Check file size (5MB maximum)
        if ($_FILES["profil"]["size"] > 5000000) {
            echo "<script>alert('Sorry, your file is too large.'); window.location.href = '../dokter.php';</script>";
            $upload_ok = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.'); window.location.href = '../dokter.php';</script>";
            $upload_ok = 0;
        }

        // Check if $upload_ok is set to 0 by an error
        if ($upload_ok == 0) {
            echo "<script>alert('Sorry, your file was not uploaded.'); window.location.href = '../dokter.php';</script>";
        } else {
            // Try to upload file
            if (move_uploaded_file($_FILES["profil"]["tmp_name"], $target_file)) {
                // File uploaded successfully
                // Insert data into database
                $sql = "INSERT INTO dokter (nama, spesialis, foto) VALUES ('$nama', '$spesialis', '$foto')";

                if ($koneksi->query($sql) === TRUE) {
                    echo "<script>alert('Dokter berhasil ditambahkan!'); window.location.href = '../dokter.php';</script>";
                } else {
                    echo "<script>alert('Error: " . $sql . "<br>" . $koneksi->error . "'); window.location.href = '../dokter.php';</script>";
                }
            } else {
                echo "<script>alert('Sorry, there was an error uploading your file.'); window.location.href = '../dokter.php';</script>";
            }
        }
    } else {
        echo "<script>alert('No file was uploaded or there was an error uploading the file.'); window.location.href = '../dokter.php';</script>";
    }

    $koneksi->close();
}
?>
