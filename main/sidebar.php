<!-- sidebar.php -->
<?php
session_start();
$current_page = basename($_SERVER['REQUEST_URI']);
?>

<nav id="sidebar" data-aos="fade-right">
  <div class="p-4 pt-5">
  <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/<?php echo $_SESSION['profil']; ?>);"></a>
    
    <!-- Tampilkan nama pengguna di bawah foto profil -->
    <h4 class="text-center text-white"><?php echo $_SESSION['nama']; ?></h4>
    <ul class="list-unstyled components mb-5">

      <li class="<?= $current_page == 'admin.php' ? 'active' : '' ?>">
        <a href="admin.php"><i class="fa-solid fa-house"></i> Dashboard</a>
      </li>
      <li>
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle <?= in_array($current_page, ['pengguna.php', 'kamar.php', 'pasien.php', 'dokter.php']) ? 'active' : '' ?>"><i class="fa-solid fa-table"></i> Data Master</a>
        <ul class="collapse list-unstyled <?= in_array($current_page, ['pengguna.php', 'kamar.php', 'pasien.php', 'dokter.php']) ? 'show' : '' ?>" id="homeSubmenu">
          <li class="<?= $current_page == 'pengguna.php' ? 'active' : '' ?>">
            <a href="pengguna.php">Data Pengguna</a>
          </li>
          <li class="<?= $current_page == 'kamar.php' ? 'active' : '' ?>">
            <a href="kamar.php">Data Kamar</a>
          </li>
          <li class="<?= $current_page == 'pasien.php' ? 'active' : '' ?>">
            <a href="pasien.php">Data Pasien</a>
          </li>
          <li class="<?= $current_page == 'dokter.php' ? 'active' : '' ?>">
            <a href="dokter.php">Data Dokter</a>
          </li>
          <li class="<?= $current_page == 'jadwal.php' ? 'active' : '' ?>">
            <a href="jadwal.php">Jadwal Dokter</a>
          </li>
        </ul>
      </li>
      <li class="<?= $current_page == 'input_pasien.php' ? 'active' : '' ?>">
        <a href="input_pasien.php"><i class="fa-solid fa-laptop-medical"></i> Input Pasien</a>
      </li>
      <li class="<?= $current_page == 'logout.php' ? 'active' : '' ?>">
        <a href="logout.php"><i class="fa-solid fa-sign-out-alt"></i>
        logout</a>
      </li>

     
    </ul>

    <div class="footer">
      <p>
        Copyright &copy; by Reyz & Rizh
      </p>
    </div>

  </div>
</nav>

<script>
function runDeletionTask() {
  console.log('Fetching script.php...');
    fetch('proses/delete_pasien.php')
        .then(response => response.text())
        .then(data => console.log(data))
        .catch(error => console.error('Error:', error));
}

runDeletionTask();
setInterval(runDeletionTask, 86400000); // Ganti interval sesuai kebutuhan
</script>
