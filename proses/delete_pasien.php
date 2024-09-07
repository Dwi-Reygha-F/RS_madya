<?php
include('../koneksi.php');

// Logika untuk memperbarui pasien yang total_harinya telah habis
$today = date('Y-m-d');

// Query untuk memperbarui pasien di tabel `pasien`
$update_patient_query = "
    UPDATE pasien 
    SET nama_kamar = '', code_kamar = ''
    WHERE DATE_ADD(tanggal_masuk, INTERVAL total_hari DAY) <= '$today'
";

// Jalankan query pertama dan cek apakah berhasil
if (mysqli_query($koneksi, $update_patient_query)) {
    echo "Pasien updated successfully.<br>";
} else {
    echo "Error updating pasien: " . mysqli_error($koneksi) . "<br>";
    echo "Query: $update_patient_query <br>";
}

// Query untuk memperbarui informasi kamar di tabel `kamar`
$update_kamar_query = "
    UPDATE kamar 
    SET nama_pasien = '', tanggal_masuk = '', total_hari = '',status = 'Tidak Terisi'
    WHERE DATE_ADD(tanggal_masuk, INTERVAL total_hari DAY) <= '$today'
";

// Jalankan query kedua dan cek apakah berhasil
if (mysqli_query($koneksi, $update_kamar_query)) {
    echo "Kamar updated successfully.<br>";
} else {
    echo "Error updating kamar: " . mysqli_error($koneksi) . "<br>";
    echo "Query: $update_kamar_query <br>";
}

mysqli_close($koneksi);
?>
