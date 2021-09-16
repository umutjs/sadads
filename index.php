<!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<!DOCTYPE html><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<html lang="en"><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<head><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
  <meta charset="UTF-8"><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
  <link rel="stylesheet" href="style.css"><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
  <link rel="stylesheet" href="dd.css"><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.1/css/all.css" ><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
  <title>MLauncher</title><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai--> 
</head><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<body><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<div class="bg-image"></div><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<center><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<div class="bg-text"><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
  <h1><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
  <!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
  <?php
    session_start();
    if (isset($_SESSION['user'])) {
        echo "Giriş Yapıldı!! <br> Hoş Geldin ". $_SESSION['user']['username'] ." !";
    }else {
        echo "Giriş yapılmamış.";
    }
?>
</h1><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<hr><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<div><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
     <p><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
     <a href="register.php" style="color:#fff;"> Register now</a> -<!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
     <a href="login.php" style="color:#fff;"> Login now</a> -<!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
     <a href="cikis.php" style="color:#fff;"> Quit now</a><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
     </p><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
    </div><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
  <p>MLACUNEHER</p><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
  <!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
</div></center>
</body>
</html>