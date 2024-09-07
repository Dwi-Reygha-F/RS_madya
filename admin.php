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

  </style>
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <?php include 'main/sidebar.php'; ?>
    <?php include 'koneksi.php'; ?>


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
                // <!-
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
                //-->
              </script></b>
            </div>
          </h4>

      </nav>

      <h2 class="mb-4">Dashboard</h2>
      <div class="container mt-5" data-aos="zoom-in-up">
        <div class="row">
          <div class="col-md-4 col-sm-12 mb-4">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title">Data Pengguna</h5>

                <!-- Button trigger modal -->
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Perlihatkan</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 mb-4">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title">Data Kamar</h5>

                <!-- Button trigger modal -->
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal2">Perlihatkan</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 mb-4">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title">Data Dokter</h5>

                <!-- Button trigger modal -->
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal3">Perlihatkan</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modals -->
      <!-- Modal 1 -->
      <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document"> <!-- Added modal-lg class for larger modal -->
          <div class="modal-content" style="border-radius: 15px;"> <!-- Added border-radius style -->
            <div class="modal-header">
              <h5 class="modal-title" id="modal1Label">Data Pengguna</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Table of users -->
              <table class="table">
                <thead style="background-color: #28a745;color: black;text-align: center;">
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Sebagai</th>
                    <th scope="col">Foto Profil</th>
                  </tr>
                </thead>
                <tbody style="color: black;text-align: center;">
                  <?php
                  // Ambil data dari tabel user
                  $sql = "SELECT * FROM user ORDER BY id ASC";
                  $result = $koneksi->query($sql);

                  $no = 1; // Inisialisasi nomor urut

                  if ($result->num_rows > 0) {
                    // Output data dari setiap baris
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr>
                    <td>" . $no . "</td>
                    <td>" . $row['nama'] . "</td>
                    <td>" . $row['username'] . "</td>
                    <td>" . $row['password'] . "</td>
                    <td>" . $row['sebagai'] . "</td>
                    <td><img src='images/" . $row['profil'] . "' alt='Profil' class='img-circle' width='50' height='50'></td>
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
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>



      <!-- Modal 2 -->
      <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document"> <!-- Added modal-lg class for larger modal -->
          <div class="modal-content" style="border-radius: 15px;"> <!-- Added border-radius style -->
            <div class="modal-header">
              <h5 class="modal-title" id="modal2Label">Data Kamar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- DataTables -->
              <table id="example" class="display" style="width:100%">
                <thead style="background-color: #28a745;color: black;text-align: center;">
                  <tr>
                    <th>NO</th>
                    <th>Nama Kamar</th>
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
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr>
                  <td>" . $no . "</td>
                  <td>" . $row['code_kamar'] . "</td>
                  <td>" . $row['nama_pasien'] . "</td>
                  <td>" . $row['status'] . "</td>
                </tr>";
                      $no++; // Tambah nomor urut setiap iterasi
                    }
                  } else {
                    echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal 3 -->
      <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document"> <!-- Added modal-lg class for larger modal -->
          <div class="modal-content" style="border-radius: 15px;"> <!-- Added border-radius style -->
            <div class="modal-header">
              <h5 class="modal-title" id="modal3Label">Data Dokter</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <!-- DataTables -->
          <table id="example" class="display" style="width:100%">
            <thead style="background-color: #28a745;color: black;text-align: center;">
              <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Spesialis</th>
                <th>Foto Profil</th>
              </tr>
            </thead>
            <tbody style="color: black;text-align: center;">
              <?php
              // Ambil data dari tabel user
              $sql = "SELECT * FROM dokter ORDER BY id ASC";
              $result = $koneksi->query($sql);

              $no = 1; // Inisialisasi nomor urut

              if ($result->num_rows > 0) {
                // Output data dari setiap baris
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>
                    <td>" . $no . "</td>
                    <td>" . $row['nama'] . "</td>
                    <td>" . $row['spesialis'] . "</td>
                    <td><img src='images/" . $row['foto'] . "' alt='Profil' class='img-circle' width='50' height='50'></td>
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
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
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
  </script>
</body>

</html>