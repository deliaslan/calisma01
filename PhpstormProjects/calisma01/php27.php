<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 19.10.2017
 * Time: 20:37
 * Project Name: calisma01
 * File Name: php27.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Cookie Kullanımı</title>
</head>
<body>
<?php
//Cookie nasıl oluşturulur?
$adsoyad = "Adem Deliaslan";
setcookie("adsoyad", $adsoyad, time() + 30);

/*strtotime() fonksiyonu ile zaman tanımlayabiliriz.

strtotime("1 second")
strtotime("1 minute")
strtotime("1 hour")
strtotime("1 day")
strtotime("1 week")
strtotime("1 month")
strtotime("1 year")

*/


$okul = "HAYÜ";

setcookie("okul", $okul, strtotime("1 minute"));

?>

</body>
</html>
