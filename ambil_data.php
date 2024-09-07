<?php
// ambil_data.php
header('Content-Type: application/json');

include 'koneksi.php';

// Check connection
if ($koneksi->connect_error) {
    die(json_encode(['success' => false, 'error' => 'Database connection failed']));
}

// Get the POST data
$data = json_decode(file_get_contents('php://input'), true);
$nama_kamar = $koneksi->real_escape_string($data['nama_kamar']);

// Query to fetch additional data (status, nama_pasien, total_hari) based on nama_kamar
$sql = "SELECT code_kamar, status, nama_pasien, total_hari FROM kamar WHERE nama_kamar = '$nama_kamar'";
$result = $koneksi->query($sql);

if ($result && $result->num_rows > 0) {
    $kamar_data = [];
    while ($row = $result->fetch_assoc()) {
        $kamar_data[] = [
            'code_kamar' => $row['code_kamar'],
            'status' => $row['status'],
            'nama_pasien' => $row['nama_pasien'],
            'total_hari' => $row['total_hari']
        ];
    }

    // Return the data as JSON
    echo json_encode(['success' => true, 'kamar_data' => $kamar_data]);
} else {
    // No data found
    echo json_encode(['success' => false, 'message' => 'No data found']);
}

$koneksi->close();
?>
