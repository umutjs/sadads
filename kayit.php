<!DOCTYPE html><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<html lang="en"><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<head><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
    <meta charset="UTF-8"><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
    <meta http-equiv="refresh" content="3;URL=login.php"><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
    <title>MLauncher - Kayıt Başarılı</title><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
</head><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<body><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
<?php
/*2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial*/
$db = new PDO("mysql:host=localhost;dbname=baglanti;charset=utf8", "root", "");
/*2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial*/
/*2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial*/
$username = $_POST['username'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
/*2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial*/
if (!$username || !$mail || !$pass) {
    die("lütfen boş alan bırakmayınız.");
}
/*2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial*/
$ekle = $db->prepare("INSERT INTO üyeler SET username = ?, mail = ?, pass = ?");
$ekle->execute([$username, $mail, $pass]);
/*2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial*/
if ($ekle) {
    echo "Başarıyla Kayıt oldunuz. Giriş Sayfasına Yönlendirliyorsunuz";
}else {
    echo "Bir hata oluştu.";
}
/*2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial*/
?><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
</body><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->
</html><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficiai-->