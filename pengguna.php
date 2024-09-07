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

      <h2 class="mb-4">Data Pengguna</h2>
      <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambahPenggunaModal">
        Tambah Pengguna
      </button>

      <!-- Modal for adding new user -->
      <div class="modal fade" id="tambahPenggunaModal" tabindex="-1" role="dialog" aria-labelledby="tambahPenggunaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="tambahPenggunaModalLabel">Tambah Pengguna</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="proses/proses_tambah.php" method="POST" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group">
                  <label for="nama">Nama:</label>
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                  <label for="username">Username:</label>
                  <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                  <label for="sebagai">Sebagai:</label>
                  <select class="form-control" id="sebagai" name="sebagai" required>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="profil">Foto Profil:</label>
                  <input type="file" class="form-control" id="profil" name="profil" accept="image/*" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>

          </div>
        </div>
      </div>
      
      <!-- Card -->
      <div class="card " data-aos="zoom-in-up">
        <div class="card-body">
          <!-- DataTables -->
          <table id="example" class="display" style="width:100%">
            <thead style="background-color: #28a745;color: black;text-align: center;">
              <tr>
              <th>NO</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Sebagai</th>
                <th>Foto Profil</th>
                <th>Aksi</th>
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
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$no."</td>
                    <td>".$row['nama']."</td>
                    <td>".$row['username']."</td>
                    <td>".$row['password']."</td>
                    <td>".$row['sebagai']."</td>
                    <td><img src='images/".$row['profil']."' alt='Profil' class='img-circle' width='50' height='50'></td>
                    <td>
                      <button type='button' class='btn btn-warning btn-sm' data-toggle='modal' data-target='#editModal" . $row['id'] . "'>Edit</button>
                      <button type='button' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#deleteModal" . $row['id'] . "'>Hapus</button>
                    </td>
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
<?php
      // Re-run the PHP loop to generate modals for each user
      $result->data_seek(0); // Reset the result pointer
      while ($row = $result->fetch_assoc()) {
      ?>
      <div class="modal fade" id="editModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel<?php echo $row['id']; ?>">Edit Pengguna</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="proses/proses_edit.php" method="POST" enctype="multipart/form-data">
              <div class="modal-body">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="form-group">
                  <label for="editNama<?php echo $row['id']; ?>">Nama:</label>
                  <input type="text" class="form-control" id="editNama<?php echo $row['id']; ?>" name="nama" value="<?php echo $row['nama']; ?>" required>
                </div>
                <div class="form-group">
                  <label for="editUsername<?php echo $row['id']; ?>">Username:</label>
                  <input type="text" class="form-control" id="editUsername<?php echo $row['id']; ?>" name="username" value="<?php echo $row['username']; ?>" required>
                </div>
                <div class="form-group">
                  <label for="editPassword<?php echo $row['id']; ?>">Password:</label>
                  <input type="password" class="form-control" id="editPassword<?php echo $row['id']; ?>" name="password" value="<?php echo $row['password']; ?>" required>
                </div>
                <div class="form-group">
                  <label for="editSebagai<?php echo $row['id']; ?>">Sebagai:</label>
                  <select class="form-control" id="editSebagai<?php echo $row['id']; ?>" name="sebagai" required>
                    <option value="admin" <?php echo ($row['sebagai'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
                    <option value="user" <?php echo ($row['sebagai'] == 'user') ? 'selected' : ''; ?>>User</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="editProfil<?php echo $row['id']; ?>">Foto Profil:</label>
                  <input type="file" class="form-control" id="editProfil<?php echo $row['id']; ?>" name="profil" accept="image/*">
                  <img src="images/<?php echo $row['profil']; ?>" alt="Profil" class="img-circle mt-2" width="50" height="50">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php } ?>
      <?php
      // Re-run the PHP loop to generate modals for each user
      $result->data_seek(0); // Reset the result pointer
      while ($row = $result->fetch_assoc()) {
      ?>
      <div class="modal fade" id="deleteModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel<?php echo $row['id']; ?>">Hapus Pengguna</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="proses/proses_hapus.php" method="POST">
              <div class="modal-body">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <p>Apakah Anda yakin ingin menghapus pengguna <strong><?php echo $row['nama']; ?></strong>?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php } ?>

</html>