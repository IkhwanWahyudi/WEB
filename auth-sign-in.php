<?php
session_start();
require 'koneksi.php';

if(isset($_POST['login'])){
    if(isset($_POST['username']) && isset($_POST['pw'])) {
        $username = $_POST['username'];
        $pw = $_POST['pw'];

        $sql = "SELECT * FROM akun WHERE username='$username' or email='$username'";
        $result = $conn->query($sql);

        //cek akun ada atau tidak
        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_assoc($result);

            //cek passwordnya valid
            if(password_verify($pw, $row['pw'])){
               
               if($row['status'] == "0"){
                  $email = $row['email'];
                  echo "<script>
                        window.location.href = 'verifikasi.php?email=$email';
                        </script>";
                  exit;
               }
               
               $username = $row['username'];
               $fname = $row['nama_lengkap'];
               $id = $row['id_akun'];

               $_SESSION['login'] = $username;
               $_SESSION['id'] = $id;

               echo "<script>
                     alert('Selamat Datang $fname');
                     window.location.href = 'page-files.php';
                     </script>";
                
            }else{
                echo "<script>
                        alert('Username dan Password salah');
                        </script>";
            }
        } else{
            echo "<script>
                        alert('Buat akun terlebih dahulu');
                        </script>";
        }
    } else {
        echo "<script>
                alert('Harap isi username dan password');
                </script>";
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
                     <h3 class="mb-3">Sign In</h3>
                     <p>Login ke akun yang dimiliki.</p>
                     <form action="" method="post">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="text" name="username" placeholder=" ">
                                 <label>Username</label>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="password" name="pw" placeholder=" ">
                                 <label>Password</label>
                              </div>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="login" >Sign In</button>

                        <p class="mt-3">
                           Belum punya akun? <a href="auth-sign-up.php" class="text-primary">Sign Up</a>
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