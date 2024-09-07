<?php
// getRoomDetails.php
$roomName = $_GET['room'];

include 'koneksi.php';

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Query untuk mengambil data kamar berdasarkan roomName
$sql = "SELECT * FROM kamar WHERE nama_kamar = ?";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("s", $roomName);  // Bind parameter untuk keamanan
$stmt->execute();
$result = $stmt->get_result();

// Periksa apakah data ditemukan
if ($result->num_rows > 0) {
    // Inisialisasi array untuk menyimpan semua hasil
    $codes = array();
    
    // Looping melalui semua hasil
    while ($row = $result->fetch_assoc()) {
        $codes[] = $row['code_kamar'];  // Menyimpan setiap code_kamar ke dalam array
    }

    // Mengubah array menjadi string dengan pemisah <br>
    $codesString = implode("<br>", $codes);

    // Mengembalikan hasil dalam format JSON
    $response = array(
        'title' => 'Kamar ' . $roomName,  // Title akan menggunakan nama kamar
        'details' => $codesString  // Mengirimkan semua code_kamar dalam format string dengan <br>
    );
} else {
    $response = array(
        'error' => 'Room not found'
    );
}

// Tutup koneksi
$stmt->close();
$koneksi->close();

// Mengembalikan response dalam format JSON
echo json_encode($response);
?>
