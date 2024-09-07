<!doctype html>
<html lang="en">

<head>
  <title>Dashboard Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
  .img-circle {
    border-radius: 50%; /* Membuat gambar menjadi bulat */
    object-fit: cover; /* Memastikan gambar sesuai dengan area tanpa distorsi */
  }
</style>

</head>
<?php include 'koneksi.php'; ?>
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

      <h2 class="mb-4">Data Kamar</h2>
      
      <!-- Card -->
      <div class="card " data-aos="zoom-in-up">
        <div class="card-body">
          <!-- DataTables -->
          <table id="example" class="display" style="width:100%">
            <thead style="background-color: #28a745;color: black;text-align: center;">
              <tr>
              <th>NO</th>
              <th>Nama Kamar</th>
              <th>Nomer Kasur</th>
                <th>Nama Pasien</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody style="color: black;text-align: center;">
    <?php
    // Ambil data dari tabel user
    $sql = "SELECT * FROM kamar ORDER BY id ASC";
    $result = $koneksi->query($sql);

    $no = 1; // Inisialisasi nomor urut

    if ($result->num_rows > 0) {
        // Output data dari setiap baris
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$no."</td>
                    <td>".$row['nama_kamar']."</td>
                    <td>".$row['code_kamar']."</td>
                    <td>".$row['nama_pasien']."</td>
                    <td>".$row['status']."</td>
                    
                  </tr>";
            $no++; // Tambah nomor urut setiap iterasi
        }
    } else {
        echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
    }
    ?>
</tbody>


          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
    $(document).ready(function() {
        $('#example').DataTable();
    });
  </script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</body>


</html>