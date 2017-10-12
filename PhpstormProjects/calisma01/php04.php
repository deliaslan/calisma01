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

/*
 *  " " ile ' ' arasındaki farkı anlamak.
*/

$ad = "adem";

echo "$ad merhaba!"; // çift tırnak içinde değişkenler kullanılabilir.
echo "<br>";
echo "<hr>";
echo '$ad merhaba!'; //tek tırnak içinde değişkenler çalışmaz!
echo "<br>";
echo "<hr>";
//yoksayma işaretleri
echo 'Merhaba $ad Bu "eğitim süresince" sabır gerekiyor. ';
echo "<br>";
echo "<hr>";
echo "Merhaba $ad Bu \"eğitim süresince\" sabır gerekiyor. ";
echo "<br>";
echo "<hr>";
/*
 * String Fonksiyonlar
*/
echo $yazi="bugün ÖSYM tarafından üniversiteye giriş sınavlarının nasıl olacağı açıklandı.";
echo "<br>";
echo "<hr>";
//strtoupper küçük harfleri büyük harfe çevirir.
echo strtoupper($yazi); // Türkçe karakterlerle ilgili sıkıntılar ileri kodlarda gösterilecektir.
echo "<br>";
echo "<hr>";
//strtolower büyük harfleri küçük harflere çevirir.
echo strtolower($yazi);
echo "<br>";
echo "<hr>";
//cümledeki kelimelerin ilk harflerini büyük yazdırır.
echo ucwords($yazi);
echo "<br>";
echo "<hr>";
//cümlenin ilk harfini büyük yazar.
echo ucfirst($yazi);
echo "<br>";
echo "<hr>";
//karakter sayma fonlsiyonu strlen()
echo "\"$yazi \"değişkeninde ".strlen($yazi)." karakter vardır.";
echo "<br>";
echo "<hr>";
//subsrting() fonksiyonu karakterlerin belli bir kısmını seçme ve yazma.
echo substr($yazi,0,25);
echo "<br>";
echo "<hr>";
//substring() fonksiyonunu devamını oku yazıları için kullanabiliriz.
$makale = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, atque cumque ea 
eaque eos eveniet facere incidunt iusto neque nulla odio repellat! Ea error exercitationem l
aborum quam suscipit tenetur vitae!";
echo substr($makale,0,150);
echo "<a href=devami.html>"." "."Devamını Oku..."."</a>";
?>
