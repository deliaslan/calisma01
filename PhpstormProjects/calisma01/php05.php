<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 12.10.2017
 * Time: 16:01
 * Project Name: calisma01
 * File Name: php05.php
 */

//Diziler
$dizi = array("adem","çiğdem","şebnem","kerem");
echo $dizi; //array olduğunu söyler ama içeriği yazdırmaz
echo "<br>";
echo "<hr>";
print_r($dizi); //arraylaerin hepsini indisiyle birlikte gösterir.
echo "<br>";
echo "<hr>";
//Echo ile dizi elemanlarını yazdırma
echo $dizi[0];
echo "<br>";
echo $dizi[1];
echo "<br>";
echo $dizi[2];
echo "<br>";
echo $dizi[3];
echo "<br>";
echo "<pre>"; // <pre> etiketiyle daha düzenli bir gösterim gerçekleşiyor.
print_r($dizi);
echo "</pre>";
?>