<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 16.10.2017
 * Time: 09:36
 * Project Name: calisma01
 * File Name: php19.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Fonksiyonlar ve Kullanımları</title>
</head>
<body>
<?php
/*
 * Fonksiyonlara Giriş
*/

//fonksiyon tanımlama. Aşağıdaki fonksiyon parametresiz fonksiyondur.
function yaz()
{
    echo "merhaba";
}

yaz();

echo "<br>";
echo "<hr>";
//fonksiyon tanımlama. Aşağıdaki fonksiyon parametreli fonksiyondur.
function topla($sayi1, $sayi2)
{

    echo $sayi1 + $sayi2;
}

topla(3, 5);
echo "<br>";
echo "<hr>";

// return ile değer döndürme ve fonksiyon ile toplama işlemi?

function toplam($sayi3, $sayi4)
{

    return $sayi3 + $sayi4;
}

echo "<br>";
echo "return ile çalışan fonksiyon";
echo "<br>";
echo toplam(4, 7);
?>

</body>
</html>
