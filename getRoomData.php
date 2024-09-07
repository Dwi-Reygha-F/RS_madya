<?php
header('Content-Type: application/json');
include 'koneksi.php';

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

// SQL query to fetch room data
$sql = "SELECT * FROM kamar";
$result = $koneksi->query($sql);

$roomData = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $roomData[$row['nama_kamar']][$row['code_kamar']] = $row['status'];
    }
}

$koneksi->close();

// Output data as JSON
echo json_encode($roomData);
?>
