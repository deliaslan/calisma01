<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 16.10.2017
 * Time: 19:44
 * Project Name: calisma01
 * File Name: php20.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Global Değişken ile fonksiyonları kullanma</title>
</head>
<body>
<?php
/*
 * Fonksiyonlarda global değişkenlerin kullanımı
*/

$b = 10;
function deger($a)
{
    global $b;
    return $a + $b;
}

echo deger(80);
?>

</body>
</html>
