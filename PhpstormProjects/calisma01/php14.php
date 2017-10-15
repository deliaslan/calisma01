<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 16.10.2017
 * Time: 00:48
 * Project Name: calisma01
 * File Name: php14.php
 */


?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Aralıktaki sayıya kadar çalışan döngü</title>
</head>
<body>
<!--
 Kullanıcının girdiği en küçük ve en büyük değer aralığında
 döngünün biteceği sayıyı da kullanıcı girer ve
 döngü kullanıcının girdiği sayıya kadar çalışır sonra döngüden çıkar.
 girilen değer aralıkta değilse ekrana yazarak bunu belirtir.
 -->
<form action="" method="post">
    <p> En küçük değeri giriniz: <input type="number" name="minimum"><br></p>
    <p> En büyük değeri giriniz: <input type="number" name="maksimum"><br></p>
    <p>Döngünün bitmesini istediğiniz sayıyı giriniz: <input type="number" name="istenilen"><br></p>
    <p><input type="submit" name="sonuc"></p>
</form>

<?php
if (isset($_POST['sonuc'])) {
    for ($sayi = $_POST['minimum']; $sayi <= $_POST['maksimum']; $sayi++) {


        if ($sayi == $_POST['istenilen']) {
            echo "Döngünün sonlandığı sayı $sayi sayısıdır.";
            exit;
        } elseif ($_POST['minimum'] <= $_POST['istenilen'] and $_POST['istenilen'] <= $_POST['maksimum']) {
            echo "Sayımız :" . $sayi;
            echo "<br>";
        } else {
            echo "Girilen sayı istenilen aralıkta değildir.";
            exit;

        }
    }

}


// alt kısım küçük bir örnek döngünün nasıl çalıştığın göstermek amaçlı.
echo "<br>";
echo "<hr>";

for ($i = 0; $i <= 100; $i++) {
    echo "$i" . " ";

    if ($i == 10) {
        echo "10'a ulaştık döngü tamamlansın";
        exit;
    }

}
?>

</body>
</html>
