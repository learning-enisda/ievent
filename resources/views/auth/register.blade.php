<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register | IEvents</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="users/img/favicon.png" rel="icon">
  <link href="users/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="users/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="users/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="users/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="users/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="users/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="users/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="users/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="users/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <div class="logo">
                    <h1><a href="/home">IEvents</a></h1>
                </div>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buat akun</h5>
                    <p class="text-center small">Masukkan informasi berikut untuk membuat akun</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Nama</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Silahkan masukkan email yang valid!!</div>
                    </div>

<!--
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>
-->
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Masukan password!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Sudah memiliki akun? <a href="/login">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="users/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="users/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="users/vendor/chart.js/chart.min.js"></script>
  <script src="users/vendor/echarts/echarts.min.js"></script>
  <script src="users/vendor/quill/quill.min.js"></script>
  <script src="users/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="users/vendor/tinymce/tinymce.min.js"></script>
  <script src="users/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="users/js/main.js"></script>

</body>

</html>