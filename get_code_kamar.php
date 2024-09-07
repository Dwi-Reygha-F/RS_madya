<?php
include 'koneksi.php'; // Include your database connection

if (isset($_GET['nama_kamar'])) {
    $nama_kamar = $_GET['nama_kamar'];
    $query = "SELECT code_kamar, status FROM kamar WHERE nama_kamar = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("s", $nama_kamar);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $code_kamar = $row['code_kamar'];
            $status = $row['status'];
            $disabled = ($status === 'Terisi') ? 'disabled' : '';
            echo "<option value='{$code_kamar}' {$disabled}>{$code_kamar} - {$status}</option>";
        }
    } else {
        echo "<option value=''>Tidak ada nomor kasur tersedia</option>";
    }

    $stmt->close();
} else {
    echo "<option value=''>Pilih Nama Kamar terlebih dahulu</option>";
}
?>
