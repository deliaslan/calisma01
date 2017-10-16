<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 16.10.2017
 * Time: 20:20
 * Project Name: calisma01
 * File Name: php21.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Fonksiyonlarda varsayılan değer atama</title>
</head>
<body>
<?php
/*
 * Fonksiyonlarda varsayılan değer atama ile eksik parametrelerin varsayılan değerle return edilmesini sağlayabiliriz.
*/

function adSoyad($ad = "ad", $soyad = "soyad")
{

    return $ad . " " . $soyad;
}

echo adSoyad("adem");
echo "<br>";
echo "<hr>";
echo adSoyad("adem", "deliaslan");
?>

</body>
</html>
