<?php
include ('../koneksi.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password']; // Encrypt password
    $sebagai = $_POST['sebagai'];

    // Directory where the file will be uploaded
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["profil"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["profil"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["profil"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Ensure the directory exists
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true); // Create directory if it does not exist
        }

        if (move_uploaded_file($_FILES["profil"]["tmp_name"], $target_file)) {
            // File uploaded successfully
            // Save data to the database
            $sql = "INSERT INTO user (nama, username, password, sebagai, profil) 
                    VALUES ('$nama', '$username', '$password', '$sebagai', '" . basename($_FILES["profil"]["name"]) . "')";

            if ($koneksi->query($sql) === TRUE) {
                // Redirect back to pengguna.php after successful insertion
                header("Location: ../pengguna.php"); // Adjust path as needed
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $koneksi->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$koneksi->close();
?>
