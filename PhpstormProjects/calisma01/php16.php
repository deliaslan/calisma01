<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 16.10.2017
 * Time: 01:51
 * Project Name: calisma01
 * File Name: php16.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>While Döngüsü</title>
</head>
<body>
<p>merhaba</p>
<?php
/*
 * while() döngüsü kullanımı
 */

$sayi = 1;
while ($sayi < 10) {
    $sayi++;
    echo $sayi . " sayısı ekrana yazdırıldı.";
    echo "<br>";
}
?>

</body>
</html>
