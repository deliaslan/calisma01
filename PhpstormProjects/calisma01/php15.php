<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 16.10.2017
 * Time: 01:31
 * Project Name: calisma01
 * File Name: php15.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Tek mi Çift mi</title>
</head>
<body>
<?php
/*
 * for döngüsü ile bir aralıktaki çift ve tek sayıları gösterme
 * ayrıca kaç adet tek ve çift sayı bulunmuş bunu ekrana yazdırma
 *
*/
$sayacCift = 0;
$sayacTek = 0;
for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i sayısı <b>çift</b> sayıdır.";
        echo "<br>";
        $sayacCift++;
    } else {
        echo "$i sayısı <i>tek</i> sayıdır.";
        echo "<br>";
        $sayacTek++;
    }
}
echo "<hr>";
echo "$sayacCift adet çift sayı bulundu.";
echo "<br>";
echo "<hr>";
echo "$sayacTek adet tek sayı bulundu.";
?>


</body>
</html>
