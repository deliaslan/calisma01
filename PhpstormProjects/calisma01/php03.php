<?php
/**
 * Created by PhpStorm.
 * User: cicos
 * Date: 11.10.2017
 * Time: 22:23
 */


$atama = 40;
echo "\$atama değişkeninin değeri: $atama";
echo "<br>";
echo "<hr>";
// $atama = $atama + 45; aşağıdaki ile aynı işleve sahiptir.
$atama += 45;
echo "\$atama değişkeninin yeni değeri: $atama";
echo "<br>";
echo "<hr>";
echo "\$atama değişkeninin yeni değeri: ".$atama; //farklı şekilde gösterimi
echo "<br>";
echo "<hr>";
$atama -= 35; //bu gösterimin çarpma, bölme ve mod alma gibi özellikleri vardır.
echo "\$atama değişkeninin yeni değeri: ".$atama;
echo "<br>";
echo "<hr>";
echo "Değeri tek tek artırmak için ++ ifadesi kullanılır. Ama ifade burada artmaz. \$atama++ => ".$atama++;
echo "<br>";
echo "<hr>";
echo "\$atama değeri şimdi arttı: ".$atama;
echo "<br>";
echo "<hr>";
echo "Değeri tek tek azaltmak için -- ifadesi kullanılır. Ama ifade burada azalmaz. \$atama-- => ".$atama--;
echo "<br>";
echo "<hr>";
echo "\$atama değeri şimdi azaldı: ".$atama;
/*
 * Atama operatörünün sonuna konulan değer ilk atamada değil sonrasında değiştirir değeri.
 * Öncesine konulduğu zaman ise anında değeri değiştirir.
*/
?>