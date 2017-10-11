<?php

error_reporting(0);
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>PHP Öğrenmeye Başlıyorum...01</title>
</head>
<body>
<!-- PHP -->
<?php
//Bu php için yorum satırıdır.
/*Bu PHP
 * çoklu yorum satırı içindir.
 * */
# bu da yorum satırı için kullanılır.
echo "Adem DELİASLAN";
?><br>
<!-- ECHO -->
<?php echo "Tek satırda tüm komut satırı varsa virgül ile bitmesine gerek yoktur."  ?>
<!-- . ile birleştirme işlemi gerçekleştirilir.  -->
<?php echo "Tek satırda tüm komut satırı varsa virgül ile bitmesine gerek yoktur"." |}| bu cümle . işaretinden sonra yazılan 
 kısımdır";

echo "merhaba" ?>


<hr>
<br><br>
<?php
/*
-Değişkenler $ işareti ile başlar.
-Değer ataması için = işareti kullanılır.
-Atama yapılırken string metinsel ifadeler " " arasında yapılır.
-Değişkenler rakamla başlayamaz
-Değişkenlerde boşluk bırakılamaz
-Türkçe karakterler değişken isimlerinde kullanılamaz.
-ÖZel karakterleri değişkenleri yine kullanamayız.

*/
//satır inme şekilleri aşağıda gösterildi.
echo $ad = "Adem"."<br>";
echo $soyad = "Deliaslan";
echo "<br>";
echo $no = 238;
echo "<br />";
echo $okul = "YEAL";

?>
</body>
</html>