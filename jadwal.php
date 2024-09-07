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
      border-radius: 50%;
      /* Membuat gambar menjadi bulat */
      object-fit: cover;
      /* Memastikan gambar sesuai dengan area tanpa distorsi */
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
<style>
  /* Mengatur tata letak grup checkbox dalam baris dan kolom */
.checkbox-group {
  display: flex;
  flex-wrap: wrap;
  gap: 10px; /* Jarak antar checkbox */
}

.checkbox-group label {
  margin: 5px; /* Jarak antar label */
}

</style>
      <h2 class="mb-4">Data Kamar</h2>

      <!-- Card -->
      <div class="card " data-aos="zoom-in-up">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                                    Tambah Jadwal
                                </button>
                                <br>
        <div class="card-body">
          
          <!-- DataTables -->
          <table id="example" class="display" style="width:100%">
          <thead style="background-color: #28a745; color: black; text-align: center;">
  <tr>
    <th>NO</th>
    <th>Nama Dokter</th>
    <th>Hari</th>
    <th>Jam Praktik</th>
    <th>Tanggal</th>
  </tr>
</thead>
<tbody style="color: black; text-align: center;">
  <?php
  // Ambil data dari tabel jadwal
  $sql = "
  SELECT j.id, j.id_dokter, j.hari, j.jam_mulai, j.jam_selesai, j.tanggal, d.nama
  FROM jadwal j 
  JOIN dokter d ON j.id_dokter = d.id 
  ORDER BY j.id ASC
  ";
  $result = $koneksi->query($sql);

  if (!$result) {
    // Tampilkan pesan kesalahan jika query gagal
    echo "Query error: " . $koneksi->error;
  } else {
    $no = 1; // Inisialisasi nomor urut

    if ($result->num_rows > 0) {
      // Output data dari setiap baris
      while ($row = $result->fetch_assoc()) {
        // Mengubah hari dari string ke array
        $hari_array = explode(',', $row['hari']);

        // Format jam
        $jam_masuk = date('H:i', strtotime($row['jam_mulai']));
        $jam_pulang = date('H:i', strtotime($row['jam_selesai']));

        // Menyiapkan string untuk jam
        $jam = $jam_masuk . ' - ' . $jam_pulang;

        // Format tanggal
        $tanggal = date('d-m-Y', strtotime($row['tanggal'])); // Ganti format jika perlu

        echo "<tr>
          <td>" . $no . "</td>
          <td>" . $row['nama'] . "</td> <!-- Menampilkan nama dokter -->
          <td>
            <div class='checkbox-group'>";

        // Menampilkan checkbox untuk hari
        $all_days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
        foreach ($all_days as $index => $day) {
          $checked = in_array($day, $hari_array) ? 'checked' : '';
          // Menambahkan class untuk memformat checkbox dalam baris
          echo "<label><input type='checkbox' disabled $checked> $day</label>";

          // Tambahkan break setiap 4 checkbox untuk mengatur tata letak
          if (($index + 1) % 4 == 0) {
            echo "<br>";
          }
        }

        echo "  </div>
          </td>
          <td>" . $jam . "</td>
          <td>" . $tanggal . "</td> <!-- Tanggal ditambahkan di sini -->
        </tr>";

        $no++; // Tambah nomor urut setiap iterasi
      }
    } else {
      echo "<tr><td colspan='5'>Tidak ada data</td></tr>"; // Ubah colspan untuk mencakup kolom tanggal
    }
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

<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Jadwal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <form class="needs-validation" action="proses/input_jadwal.php" method="post">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                        <label for="doctorName">Nama Dokter</label>
<select class="form-control" name="id_dokter" id="doctorName" required>
    <option value="" disabled selected>Pilih Dokter</option>
    <?php 
    $query = "SELECT * FROM dokter";
    $result = mysqli_query($koneksi, $query);
    while($row = mysqli_fetch_assoc($result)) { ?>
        <option value="<?php echo $row['id']; ?>">
            <?php echo $row['nama'] . ' | ' . $row['spesialis']; ?>
        </option>
    <?php } ?>
</select>

                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Hari</label>
                            <div class="row">
                                <!-- Hari checkboxes -->
                                <div class="col-md-3 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="dayMonday" name="hari[]" value="Senin">
                                        <label class="form-check-label" for="dayMonday">Senin</label>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="dayTuesday" name="hari[]" value="Selasa">
                                        <label class="form-check-label" for="dayTuesday">Selasa</label>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="dayWednesday" name="hari[]" value="Rabu">
                                        <label class="form-check-label" for="dayWednesday">Rabu</label>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="dayThursday" name="hari[]" value="Kamis">
                                        <label class="form-check-label" for="dayThursday">Kamis</label>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="dayFriday" name="hari[]" value="Jumat">
                                        <label class="form-check-label" for="dayFriday">Jumat</label>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="daySaturday" name="hari[]" value="Sabtu">
                                        <label class="form-check-label" for="daySaturday">Sabtu</label>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="daySunday" name="hari[]" value="Minggu">
                                        <label class="form-check-label" for="daySunday">Minggu</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="dynamicDates" class="col-md-12 mb-3">
                            <!-- Dynamic Date Inputs will be added here -->
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="startTime">Jam Masuk</label>
                            <input type="time" class="form-control" name="jam_masuk" id="startTime" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid start time is required.
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="endTime">Jam Pulang</label>
                            <input type="time" class="form-control" name="jam_pulang" id="endTime" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid end time is required.
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dayCheckboxes = document.querySelectorAll('input[type="checkbox"][name="hari[]"]');
        const dynamicDatesDiv = document.getElementById('dynamicDates');
        
        dayCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                updateDateInputs();
            });
        });

        function updateDateInputs() {
            const selectedDays = Array.from(dayCheckboxes)
                .filter(checkbox => checkbox.checked)
                .map(checkbox => checkbox.value);

            dynamicDatesDiv.innerHTML = ''; // Clear existing inputs

            if (selectedDays.length > 0) {
                selectedDays.forEach(day => {
                    const dateLabel = document.createElement('label');
                    dateLabel.textContent = `${day} - Tanggal`;
                    dateLabel.setAttribute('for', `date_${day}`);
                    
                    const dateInput = document.createElement('input');
                    dateInput.type = 'date';
                    dateInput.className = 'form-control';
                    dateInput.name = 'tanggal[]';
                    dateInput.id = `date_${day}`;
                    dateInput.required = true;

                    dynamicDatesDiv.appendChild(dateLabel);
                    dynamicDatesDiv.appendChild(dateInput);
                    dynamicDatesDiv.appendChild(document.createElement('br')); // Add a line break
                });
            }
        }
    });
</script>
</html>
