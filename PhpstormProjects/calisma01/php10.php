<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 15.10.2017
 * Time: 22:57
 * Project Name: calisma01
 * File Name: php10.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kullanıcı Girişi</title>
</head>
    <body>
<!--
 $kadi = adem;
 $sifre = 123456;

 olan kullanıcı forma doğru giriş yapmışsa "başarılı giriş yaptı" yazdıralım.
 -->
<?php


//if koşulu direk sonuç döndürebilir.
$sayi= 1;

if($sayi){
    echo "Bir değişken tanımlanmış ve adı koşulda geçen \$sayi dır.";
}
else{
    echo "Böyle bir değişken(\$sayi) yok varsa da değer ataması yapılmamıştır.";
}
?>


<form action="" method="post">
    <h4>Kullanıcı Girişi</h4>
    Kullanıcı Adı: <input type="text" name="kadi" placeholder="Kullanıcı adınız"><br>
   Şifre:  <input type = "password" name="sifre" placeholder="Şifreniz"><br>
    <input type="submit" name="kullanicigiris" value="Giriş Yap">
</form>
<?php
if(isset($_POST['kullanicigiris'])){ /* kullanıcının name alanında post ettiği değer buradaki değişkene eşitse
 bu alanın çalışmaısını sağlıyor.
 */


    $kadi = $_POST['kadi'];
    $sifre = $_POST['sifre'];

    if($kadi == "adem" and /*or*/ $sifre = "123456"){
        echo "Kullanıcı girişi başarılı. Hoşgeldiniz $kadi.";

    }
    else{
        echo "Yanlış Kullanıcı adı veya şifresi";
    }
}
?>

</body>
</html>
