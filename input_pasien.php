<!doctype html>
<html lang="en">

<head>
    <title>Dashboard Admin - Input Pasien</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <?php include 'main/sidebar.php'; ?>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" data-aos="fade-down">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-success">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <h4>
                        <div class="date">
                            <script type='text/javascript'>
                                var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                                var date = new Date();
                                var day = date.getDate();
                                var month = date.getMonth();
                                var thisDay = date.getDay(),
                                    thisDay = myDays[thisDay];
                                var yy = date.getYear();
                                var year = (yy < 1000) ? yy + 1900 : yy;
                                document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                            </script>
                        </div>
                    </h4>
                </div>
            </nav>

            <h2 class="mb-4">Input Data Pasien</h2>

            <!-- Form Input Pasien -->
            <div class="card" data-aos="zoom-in-up">
    <div class="card-body">
        <form action="proses/proses_input.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nama_dokter">Nama Dokter</label>
                    <select class="form-control" id="nama_dokter" name="nama_dokter" required>
    <option value="" disabled selected>Pilih Nama Dokter</option>
    <?php
    include 'koneksi.php';
    // Fetch data from the 'dokter' table, including 'spesialis'
    $result = mysqli_query($koneksi, "SELECT nama, spesialis FROM dokter");
    while ($row = mysqli_fetch_assoc($result)) {
        // Combine nama and spesialis for display
        $displayText = $row['nama'] . " | " . $row['spesialis'];
        echo "<option value='" . $row['nama'] . "'>" . $displayText . "</option>";
    }
    ?>
</select>
                </div>
                <div class="form-group col-md-6">
                    <label for="nama_pasien">Nama Pasien</label>
                    <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" required>
                </div>
            </div>
            <div class="form-group">
                <label for="keluhan">Keluhan</label>
                <textarea class="form-control" id="keluhan" name="keluhan" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="penyakit">Penyakit</label>
                <input type="text" class="form-control" id="penyakit" name="penyakit" required>
            </div>
            <div class="form-group">
                <label for="total_hari">Total Hari Perawatan</label>
                <input type="number" class="form-control" id="total_hari" name="total_hari" required>
            </div>
            <input type="hidden" name="tanggal_masuk" id="tanggal_masuk" value="<?php echo date('Y-m-d'); ?>">
            <input type="hidden" name="status" id="status" value="Terisi">

            <div class="form-group">
    <label for="nama_kamar">Nama Kamar</label>
    <select class="form-control" id="nama_kamar" name="nama_kamar" required onchange="loadCodeKamar(this.value)">
        <option value="">Pilih Nama Kamar</option>
        <?php
        // PHP to fetch and display available rooms from the database
        include 'koneksi.php'; // Include your database connection file

        $query = "SELECT DISTINCT nama_kamar FROM kamar";
        $result = $koneksi->query($query);
        while ($row = $result->fetch_assoc()) {
            echo "<option value='{$row['nama_kamar']}'>{$row['nama_kamar']}</option>";
        }
        ?>
    </select>
</div>
<div class="form-group">
    <label for="code_kamar">Nomer Kasur</label>
    <select class="form-control" id="code_kamar" name="code_kamar" required>
        <option value="">Pilih Nama Kamar terlebih dahulu</option>
    </select>
</div>


            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<script>
    function loadCodeKamar(namaKamar) {
    if (namaKamar === "") {
        document.getElementById("code_kamar").innerHTML = "<option value=''>Pilih Nama Kamar terlebih dahulu</option>";
        return;
    }
    
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("code_kamar").innerHTML = xhr.responseText;
        }
    };
    xhr.open("GET", "get_code_kamar.php?nama_kamar=" + encodeURIComponent(namaKamar), true);
    xhr.send();
}

</script>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
