<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 16.10.2017
 * Time: 02:00
 * Project Name: calisma01
 * File Name: php17.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>for döngüsü ile dizi elemanlarını yazdırma</title>
</head>
<body>
<?php
$dizi = array("nane", "kereviz", "zencefil", "limon", "su", "tarçın");

echo "Dizinin uzunluğu: " . $uzunluk = count($dizi) . " elemandan oluşmaktadır.";
echo "<br>";
echo "<hr>";
echo "Dizinin elemanları ise:";
echo "<br>";
for ($i = 0; $i < $uzunluk; $i++) {
    echo "\$dizi[" . $i . "]. elemanı => " . $dizi[$i];
    echo "<br>";
}
?>

</body>
</html>
