<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 12.10.2017
 * Time: 16:18
 * Project Name: calisma01
 * File Name: php06.php
 */

//Dizilerde kullanılan bazı hazır fonksiyonlar


// sort sıralama fonksiyonu varsayılan küçükten büyüğe sıralama yapar.

$dizi=array(1,2,12,94,35,86,17,8,9,10);
echo "<pre>";
print_r($dizi);
echo "</pre>";
echo "<br>";
echo "<hr>";
sort($dizi);
echo "<pre>";
print_r($dizi);
echo "</pre>";
echo "<br>";
echo "<hr>";
rsort($dizi);
echo "<pre>";
print_r($dizi);
echo "</pre>";

$harfler = array("a","b","c","d","e","ç","ğ");
sort($harfler); //Türkçe karakterler sıralamada sonuncu sıralarda olmaktadır.
echo "<pre>";
print_r($harfler);
echo "</pre>";
echo "<br>";
echo "<hr>";
rsort($harfler);
echo "<pre>";
print_r($harfler);
echo "</pre>";
echo "<br>";
echo "<hr>";
// in array() fonksiyonu bir değerin dizinin içinde olup olmadığını denetlememize yarar. var ise 1 değerini döndürür.

$iller = array("adana","afyon","ankara","nigde","sakarya","istanbul");

$ilSec = in_array("nigde",$iller);

if($ilSec == 1){
    echo "İstenilen il listede bulunmaktadır.";
}
else{
    echo "İstenil il bulunamadı";
}

echo "<br>";
echo "<hr>";
// implode fonksiyonu ile dizideki elemanlar listelenirken aralarına istenilen karakter konulabilir.

echo implode(", ",$iller);
echo "<br>";
echo "<hr>";
?>




