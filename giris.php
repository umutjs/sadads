<!DOCTYPE html><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial-->
<html lang="en"><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial-->
<head><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial-->
    <meta charset="UTF-8"><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial-->
    <title>MLauncher - Giriş Hatası</title><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial-->
</head><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial-->
<body><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial-->
    <!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial-->
<?php/*buraya gelecek kodlar veya yazılar sayfada görünmez.Birden fazla satır için bunu kullanın.*/
session_start();

$db = new PDO("mysql:host=localhost;dbname=baglanti;charset=utf8", "root", "");

$username = $_POST['username'];
$pass = $_POST['pass'];

if (!$username || !$pass) {
    die("boş alan bırakmayınız!");
}

$user = $db->query("SELECT * FROM üyeler WHERE username = '$username' AND pass = '$pass'")->fetch();

if ($user) {
    $_SESSION['user'] = $user;
    header("location:index.php");
}else {
    echo "Bilgiler hatalı";
}
?>
<!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial-->
<a href="login">Geri dön</a><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial-->
</body><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial-->
</html><!--2021. Gweep Creative tarafından yapılmıştır | Youtube.com/GweepCreativeOfficial-->