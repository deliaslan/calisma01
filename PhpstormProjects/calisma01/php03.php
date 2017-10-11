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
echo "\$atama değişkeninin yeni değeri: ".$atama; //farklı şekilde gösterimi
?>