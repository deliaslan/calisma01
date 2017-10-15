<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 16.10.2017
 * Time: 02:14
 * Project Name: calisma01
 * File Name: php18.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>foreach() fonksiyonu</title>
</head>
<body>
<?php
/*
 * foreach ile ilk parametreye diziyi tanımlıyoruz.
 * İkinci parametreye ise kendi istediğimiz değişken adını yazarak verilerin alınmasını sağlıyoruz.
 * aşağıdaki örnekte $dizi değişkeni dizi adı ve olduğu gibi ilk parametreye yazıldı.
 * ikinci parametreye ise benim için bu dizi elemanlarını ifade eden $malzeme değişkeni adını verdim.
*/
$dizi = array("nane", "kereviz", "zencefil", "limon", "su", "tarçın", "yeşil çay");

foreach ($dizi as $malzeme) {

    echo $malzeme;
    echo "<br>";

}
?>

</body>
</html>
