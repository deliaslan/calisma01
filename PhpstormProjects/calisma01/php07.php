<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 12.10.2017
 * Time: 23:31
 * Project Name: calisma01
 * File Name: php07.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <body>
<!--Post ve Get metodları -->
<p>POST ile yapılan işlem</p>
<?php
// $_POST['input elemanının name kısmına yazılan ifade'];
echo "POST edilen değer: ".$_POST['ad']." ".$_POST['soyad'];
?>
    <form action="php07a.php" method="post">
        Adınız: <input type="text" name="ad" placeholder="Adınızı Giriniz">
        <br>
        Soyadınız: <input type="text" name="soyad" placeholder="Soyadınızı Giriniz">
        <br>
        <input type="submit" name="" value="Gönder">
    </form>

<br><br><br>
<hr>
<!--Post ve Get metodları -->
<p>GET ile yapılan işlem</p>
<?php
// $_GET['input elemanının name kısmına yazılan ifade'];
echo "GET edilen değer: ".$_GET['ad']." ".$_GET['soyad'];
?>
<form action="php07a.php" method="get">
    Adınız: <input type="text" name="ad" placeholder="Adınızı Giriniz">
    <br>
    Soyadınız: <input type="text" name="soyad" placeholder="Soyadınızı Giriniz">
    <br>
    <input type="submit" name="" value="Gönder">
</form>

</body>
</html>
