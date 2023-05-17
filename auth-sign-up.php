<?php
session_start();
require 'koneksi.php';

function verifikasi_email($email, $kode_otp)
{
   $url = 'https://api.elasticemail.com/v2/email/send';
   try {
      $post = array('from' => 'vulcan.ryujin.9@gmail.com',
          'fromName' => 'Simple Drive',
          'apikey' => 'BAECEAF99F4410DBBAB1F3A31238D1D723E9D8D41262844A068BA34206F590DD148779ADA0460C7CDDDA6B1B3517EEC7',
          'subject' => 'Verifikasi Akun Simple Drive',
          'to' => $email,
          'bodyHtml' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>        <title>        </title>        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">        <meta name="viewport" content="width=device-width">        <style type="text/css">body, html {          margin: 0px;          padding: 0px;          -webkit-font-smoothing: antialiased;          text-size-adjust: none;          width: 100% !important;        }          table td, table {          }          #outlook a {            padding: 0px;          }          .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {            line-height: 100%;          }          .ExternalClass {            width: 100%;          }          @media only screen and (max-width: 480px) {             table tr td table.edsocialfollowcontainer {width: auto !important;} table, table tr td, table td {              width: 100% !important;            }            img {              width: inherit;            }            .layer_2 {              max-width: 100% !important;            }            .edsocialfollowcontainer table {              max-width: 25% !important;            }            .edsocialfollowcontainer table td {              padding: 10px !important;            }          }        </style>        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css">      </head><body style="padding:0; margin: 0;background: #efefef">        <table style="height: 100%; width: 100%; background-color: #efefef;" align="center">          <tbody>            <tr>              <td valign="top" id="dbody" data-version="2.31" style="width: 100%; height: 100%; padding-top: 30px; padding-bottom: 30px; background-color: #efefef;">                                       <div class="layer_2" style="max-width: 300px; display: inline-block; vertical-align: top; width: 100%;">                                                 </div>                        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->                      </td>                    </tr>                    <tr>                      <td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;">                        <!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]-->                        <div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;">                                                  </div>                        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->                      </td>                    </tr>                    <tr>                      <td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;">                        <!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]-->                        <div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;">                          <table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse;width:100%">                            <tbody>                              <tr>                                <td valign="top" class="emptycell" style="padding: 10px;">                                </td>                              </tr>                            </tbody>                          </table>                        </div>                        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->                      </td>                    </tr>                    <tr>                      <td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;">                        <!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]-->                        <div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;">                          <table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%">                            <tbody>                              <tr>                                <td valign="top" class="edtext" style="padding: 20px; text-align: left; color: #5f5f5f; font-size: 14px; font-family: Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;">                                  <p class="style1 text-center" style="text-align: center; margin: 0px; padding: 0px; color: #424a60; font-size: 28px; font-family: Helvetica, Arial, sans-serif;">Verifikasi Akun SimpleDrive Kamu                                  </p>                                </td>                              </tr>                            </tbody>                          </table>                        </div>                        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->                      </td>                    </tr>                    <tr>                      <td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;">                        <!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]-->                        <div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;">                          <table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse;width:100%">                            <tbody>                              <tr>                                <td valign="top" class="emptycell" style="padding: 10px;">                                </td>                              </tr>                            </tbody>                          </table>                        </div>                        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->                      </td>                    </tr>                    <tr>                      <td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;">                        <!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]-->                        <div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;">                          <table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%">                            <tbody>                              <tr>                                <td valign="top" class="edtext" style="padding: 20px; text-align: left; color: #5f5f5f; font-size: 14px; font-family: Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;">                                  <p style="margin: 0px; padding: 0px;"> Berikut adalah kode OTP untuk verifikasi akun kamu. Jangan berikan kode OTP ini kepada siapapun. Jika tidak merasa melakukan pembuatan akun, kamu boleh menghapus pesan ini.&nbsp;                                  </p>                                                                                                  </td>                              </tr>                            </tbody>                          </table>                        </div>                        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->                      </td>                    </tr>                    <tr>                      <td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;">                        <!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]-->                        <div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;">                          <table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%">                            <tbody>                              <tr>                                <td valign="top" class="edtext" style="padding: 20px; text-align: left; color: #5f5f5f; font-size: 14px; font-family: Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;">                                  <h2 style="margin: 0px; padding: 0px;text-align:center">' . $kode_otp . '                                   </h2>                                                                                                  </td>                              </tr>                            </tbody>                          </table>                        </div>                        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->                    </td>                    </tr>                                                            <tr>                      <td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;">                        <!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]-->                        <div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;">                          <table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse;width:100%">                            <tbody>                              <tr>                                <td valign="top" class="emptycell" style="padding: 10px;">                                </td>                              </tr>                            </tbody>                          </table>                        </div>                        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->                      </td>                    </tr>                                        <tr>                      <td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;">                        <!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]-->                        <div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;">                          <table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse;width:100%">                            <tbody>                              <tr>                                <td valign="top" class="emptycell" style="padding: 10px;">                                </td>                              </tr>                            </tbody>                          </table>                        </div>                        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->                      </td>                    </tr>                    <tr>                      <td class="drow" valign="top" align="center" style="background-color: #efefef; box-sizing: border-box; font-size: 0px; text-align: center;">                        <!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]-->                        <div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;">                          <table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%">                            <tbody>                              <tr>                                <td valign="top" class="edtext" style="padding: 20px; text-align: left; color: #5f5f5f; font-size: 14px; font-family: Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;">                                                                  </td>                              </tr>                            </tbody>                          </table>                        </div>                        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->                      </td>                    </tr>                  </tbody>                </table>                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->              </td>            </tr>          </tbody>        </table>      </body></html>',
          'bodyText' => 'Text Body',
          'isTransactional' => false);

      $ch = curl_init();
      curl_setopt_array($ch, array(
          CURLOPT_URL => $url,
          CURLOPT_POST => true,
          CURLOPT_POSTFIELDS => $post,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_HEADER => false,
          CURLOPT_SSL_VERIFYPEER => false
      ));

      $result = curl_exec($ch);
      curl_close($ch);
   } catch (Exception $ex) {
      echo $ex->getMessage();
   }
}

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
       $kode_otp = substr(uniqid(), 0, 6);
        // cek konfirmasi password
        if ($pw == $konfirpassword) {

            $pw_hash = password_hash($pw, PASSWORD_DEFAULT);

            $query = "INSERT INTO akun (email, username, nama_lengkap, pw, image, kode_otp) VALUES ('$email', '$username', '$fname', '$pw_hash', '$fp', '$kode_otp')";
            $result = $conn->query($query);
            if ($result) {
               verifikasi_email($email, $kode_otp);
                echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'verifikasi.php?email=".$email."';
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
                     <form action="auth-sign-up.php" method="post" onsubmit="return validateInput()">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="text" name = "username" placeholder=" " id="input_field">
                                 <label>Username</label>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="text" name = "fullname" placeholder=" " id="input_field">
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
                                 <input class="floating-input form-control" type="password" name="pw" placeholder=" " id="input_field">
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
                                 <label class="custom-control-label" for="customCheck1">Saya setuju dengan <a href = snk.php>syarat & ketentuan penggunaan</label>
                              </div>
                           </div>
                        </div>
                        <button type="submit" name="register" class="btn btn-primary" id="myButton" disabled>Sign Up</button>
                        <p class="mt-3">Sudah memiliki akun? <a href="auth-sign-in.php" class="text-primary">Sign In</a>
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

   <script>
    // Mendapatkan referensi elemen checkbox dan tombol
    var checkbox = document.getElementById("customCheck1");
    var button = document.getElementById("myButton");
    
    // Menambahkan event listener untuk perubahan status checkbox
    checkbox.addEventListener("change", function() {
        // Mengatur keadaan tombol berdasarkan status checkbox
        button.disabled = !checkbox.checked;
    });

    function validateInput() {
        var inputField = document.getElementById("input_field").value.trim();

        if (inputField.length === 0) {
            alert("Input tidak valid. Harap isi dengan input yang valid.");
            return false;
        }

        return true;
    }
   </script>

</body>

</html>
