<!doctype html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <link rel="stylesheet" href="css/login.css">
</head>
<body class="img js-fullheight" style="background-image: url(images/rumah_sakit.jpg);">
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">Login</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
          <div class="login-wrap p-0">
            <h3 class="mb-4 text-center">Silahkan Login Terlebih Dahulu</h3>
            <form action="cek_login.php" method="post" class="signin-form">
              <div class="form-group">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
              </div>
              <div class="form-group">
                <input id="password-field" type="password" name="password" id="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/main.js"></script>

<script>
  function showToastAndRedirect(role) {
    Swal.fire({
      icon: 'success',
      title: 'Login Berhasil',
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      },
      willClose: () => {
        if (role === 'admin') {
          window.location.href = 'admin.php';
        } else if (role === 'user') {
          window.location.href = 'user.php';
        }
      }
    });
  }

  function showErrorToast() {
    Swal.fire({
      icon: 'error',
      title: 'Username Atau Password Salah',
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    });
  }

  <?php if (isset($_GET['login'])): ?>
    <?php if ($_GET['login'] == 'success'): ?>
      showToastAndRedirect("<?php echo $_GET['sebagai']; ?>");
    <?php elseif ($_GET['login'] == 'error'): ?>
      showErrorToast();
    <?php endif; ?>
  <?php endif; ?>
</script>


</body>
</html>
