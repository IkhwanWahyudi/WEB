<?php
session_start();
require 'koneksi.php';

if (isset($_POST['register'])) {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $fname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $pw = isset($_POST['pw']) ? $_POST['pw'] : '';
    $konfirpassword = isset($_POST['konfirpassword']) ? $_POST['konfirpassword'] : '';
    $fp = isset($_POST['fp']) ? $_POST['fp'] : '';

    // cek username udah digunakan atau belum
    $sql = "SELECT * FROM akun WHERE username ='$username'";
    $user = $conn->query($sql);

    if (mysqli_num_rows($user) > 0) {
        echo "<script>
                alert('username telah digunakan, silahkan gunakan username lain')
            </script>";
    } else {
        // cek konfirmasi password
        if ($pw == $konfirpassword) {

            $pw_hash = password_hash($pw, PASSWORD_DEFAULT);

            $query = "INSERT INTO akun (email, username, nama_lengkap, pw, konfirpassword, image) VALUES ('$email', '$username', '$fname', '$pw_hash', '$konfirpassword', '$fp')";
            $result = $conn->query($query);

            if ($result) {
                echo "<script>
                alert('Registrasi Berhasil')
                document.location.href = 'index.php';
                </script>";
            } else {
                echo "<script>
                alert('Registrasi Gagal')
                document.location.href = 'auth-sign-up.php';
            </script>";
            }
        } else {
            echo "<script>
                alert('konfirmasi password salah!')
            </script>";
        }
    }
}
?>


<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>SimpleDrive</title>

   <!-- Favicon -->
   <link rel="shortcut icon" href="../assets/logo-teks.png" />

   <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
   <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.0">

   <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
   <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">

   <!-- Viewer Plugin -->
   <!--PDF-->
   <link rel="stylesheet" href="../assets/vendor/doc-viewer/include/pdf/pdf.viewer.css">
   <!--Docs-->
   <!--PPTX-->
   <link rel="stylesheet" href="../assets/vendor/doc-viewer/include/PPTXjs/css/pptxjs.css">
   <link rel="stylesheet" href="../assets/vendor/doc-viewer/include/PPTXjs/css/nv.d3.min.css">
   <!--All Spreadsheet -->
   <link rel="stylesheet" href="../assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.css">
   <!--Image viewer-->
   <link rel="stylesheet" href="../assets/vendor/doc-viewer/include/verySimpleImageViewer/css/jquery.verySimpleImageViewer.css">
   <!--officeToHtml-->
   <link rel="stylesheet" href="../assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.css">
</head>

<body class=" ">
   <!-- loader Start -->
   <div id="loading">
      <div id="loading-center">
      </div>
   </div>
   <!-- loader END -->

   <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-5 col-sm-12 col-12 align-self-center">
                  <div class="sign-user_card">
                     <img src="../assets/logo.png" class="img-fluid rounded-normal light-logo logo" alt="logo">
                     <!-- <img src="../assets/images/logo-white.png" class="img-fluid rounded-normal darkmode-logo logo" alt="logo"> -->
                     <h3 class="mb-3">Sign Up</h3>
                     <p>Buat akun baru.</p>
                     <form action="auth-sign-up.php" method="post">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="text" name = "username" placeholder=" ">
                                 <label>Username</label>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="text" name = "fullname" placeholder=" ">
                                 <label>Nama Lengkap</label>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="email" name = "email" placeholder=" ">
                                 <label>Email</label>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="password" name="pw" placeholder=" ">
                                 <label>Password</label>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="password" name="konfirpassword" placeholder=" ">
                                 <input type="hidden" name="fp" value="noprofil.jpg">
                                 <label>Confirm Password</label>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="custom-control custom-checkbox mb-3 text-left">
                                 <input type="checkbox" class="custom-control-input" id="customCheck1">
                                 <label class="custom-control-label" for="customCheck1">Saya setuju dengan ketentuan penggunaan</label>
                              </div>
                           </div>
                        </div>
                        <button type="submit" name="register" class="btn btn-primary">Sign Up</button>
                        <p class="mt-3">
                           Sudah memiliki akun? <a href="auth-sign-in.php" class="text-primary">Sign In</a>
                        </p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>

   <!-- Backend Bundle JavaScript -->
   <script src="../assets/js/backend-bundle.min.js"></script>

   <!-- Chart Custom JavaScript -->
   <script src="../assets/js/customizer.js"></script>

   <!-- Chart Custom JavaScript -->
   <script src="../assets/js/chart-custom.js"></script>

   <!--PDF-->
   <script src="../assets/vendor/doc-viewer/include/pdf/pdf.js"></script>
   <!--Docs-->
   <script src="../assets/vendor/doc-viewer/include/docx/jszip-utils.js"></script>
   <script src="../assets/vendor/doc-viewer/include/docx/mammoth.browser.min.js"></script>
   <!--PPTX-->
   <script src="../assets/vendor/doc-viewer/include/PPTXjs/js/filereader.js"></script>
   <script src="../assets/vendor/doc-viewer/include/PPTXjs/js/d3.min.js"></script>
   <script src="../assets/vendor/doc-viewer/include/PPTXjs/js/nv.d3.min.js"></script>
   <script src="../assets/vendor/doc-viewer/include/PPTXjs/js/pptxjs.js"></script>
   <script src="../assets/vendor/doc-viewer/include/PPTXjs/js/divs2slides.js"></script>
   <!--All Spreadsheet -->
   <script src="../assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.js"></script>
   <script src="../assets/vendor/doc-viewer/include/SheetJS/xlsx.full.min.js"></script>
   <!--Image viewer-->
   <script src="../assets/vendor/doc-viewer/include/verySimpleImageViewer/js/jquery.verySimpleImageViewer.js"></script>
   <!--officeToHtml-->
   <script src="../assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.js"></script>
   <script src="../assets/js/doc-viewer.js"></script>
   <!-- app JavaScript -->
   <script src="../assets/js/app.js"></script>
</body>

</html>
