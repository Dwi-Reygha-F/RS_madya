<?php
// process_form.php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_dokter = $_POST['id_dokter'];
    $hari = isset($_POST['hari']) ? $_POST['hari'] : array(); // Mendapatkan array hari
    $jam_masuk = $_POST['jam_masuk'];
    $jam_pulang = $_POST['jam_pulang'];
    $tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : array(); // Mendapatkan array tanggal

    // Cek koneksi
    if ($koneksi->connect_error) {
        die("Koneksi gagal: " . $koneksi->connect_error);
    }

    // Menyimpan data dokter
    $query = "INSERT INTO jadwal (id_dokter, hari, jam_mulai, jam_selesai, tanggal) VALUES (?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);

    if ($stmt === false) {
        die("Error preparing statement: " . $koneksi->error);
    }

    // Iterasi melalui hari dan tanggal
    foreach ($hari as $index => $day) {
        if (isset($tanggal[$index])) {
            $tanggal_value = $tanggal[$index];
            $stmt->bind_param("sssss", $nama_dokter, $day, $jam_masuk, $jam_pulang, $tanggal_value);

            if (!$stmt->execute()) {
                echo "Error executing statement: " . $stmt->error;
            }
        }
    }

    $stmt->close();
    $koneksi->close();

    header("Location: ../jadwal.php");
} else {
    echo "Invalid request method.";
}
?>
