<?php
include ('../koneksi.php');

// Logika untuk menghapus pasien yang total_harinya telah habis

// Ambil data dari POST
$dokter = $_POST['nama_dokter'];
$pasien = $_POST['nama_pasien'];
$keluhan = $_POST['keluhan'];
$penyakit = $_POST['penyakit'];
$total_hari = $_POST['total_hari'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$nama_kamar = $_POST['nama_kamar'];
$code_kamar = $_POST['code_kamar'];
$status = $_POST['status'];
// Insert data ke tbl_pasien
$gel = "INSERT INTO pasien (nama_dokter, nama_pasien, keluhan, penyakit, total_hari, tanggal_masuk, nama_kamar, code_kamar) 
        VALUES ('$dokter', '$pasien', '$keluhan', '$penyakit', '$total_hari', '$tanggal_masuk', '$nama_kamar', '$code_kamar')";

if (mysqli_query($koneksi, $gel)) {
    // Update status kamar di tbl_kamar
    $query3 = "UPDATE kamar SET status = '$status', nama_pasien = '$pasien',tanggal_masuk = '$tanggal_masuk',total_hari = '$total_hari' WHERE nama_kamar = '$nama_kamar' AND code_kamar = '$code_kamar'";
    
    if (mysqli_query($koneksi, $query3)) {
        header("location:../input_pasien.php");
    } else {
        echo "Error: " . $query3 . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Error: " . $gel . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
