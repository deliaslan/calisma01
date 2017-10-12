<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 12.10.2017
 * Time: 11:00
 * Project Name: calisma01
 * File Name: php04.php
 */

/*
 * Hazır fonksiyonlar
*/

//rastgele sayı üretme fonksyionu
echo rand(1,30);  //1 ile 30 dahil arasında rastgele sayı üretecektir. İlk değer minimum, ikinci değer maksimumu ifade eder.
echo "<hr>";
//rastgele üretilen sayıyla bir tahmin yapma uygulaması
echo $tahminet=rand(1,20); echo "<br>";
echo "<hr>";
if($tahminet==7){
    echo "Sayımız $tahminet ve kazandınız.";
    echo "<br>";
    echo "<hr>";
}
else{
    echo "Çıkan sonuç: $tahminet ama bu sayı 7'ye eşit değil!";
    echo "<br>";
    echo "<hr>";

}
?>