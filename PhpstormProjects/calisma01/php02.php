<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 11.10.2017
 * Time: 21:44
 */

/*
+ Toplama
- Çıkarma
/ Bölme
* Çarpma
% Mod Alma(Kalan Gösterme)
*/

$numara1=44;
$numara2=13;
echo "Toplama İşlemi: ";
$toplam = $numara1+$numara2;
echo $toplam;
echo "<br>";
echo "Çıkarma İşlemi: ";
$cikar = $numara1 - $numara2;
echo $cikar;
echo "<br>";
echo "Bölme İşlemi: ";
$bolme = $numara1/$numara2;
echo $bolme;
echo "<br>";
echo "Çarpma İşlemi: ";
$carpim = $numara1*$numara2;
echo $carpim;
echo "<br>";
echo "Mod Alma İşlemi: ";
$modAlma = $numara1%$numara2;
echo $modAlma;
echo "<br>";
echo "İşlem adımlarını göstermek için kullanılan yöntem=> $numara1+$numara2 = $toplam"; //böyle bir kullanımda var tüm elemanları yazdırmak için
?>