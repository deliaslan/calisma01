<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 16.10.2017
 * Time: 00:08
 * Project Name: calisma01
 * File Name: php12.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Switch Case</title>
</head>
<body>
<form action="" method="post">
    Numara giriniz: <input type="number"  name="deger" placeholder="Sayıyı Giriniz"><br>
    <input type="submit" name="gonder" value="Gönder">
</form>

<?php
if(isset($_POST['gonder'])) {

    $puan = $_POST['deger'];


    echo "<br>";
    echo "<hr>";
    echo "Sayı: ".$puan."'dır.";
    echo "<br>";
    echo "<hr>";

    if($puan%2 == 0){
        echo "$puan sayısı çifttir.";
    }
    else{
        echo "$puan sayısı tektir.";
    }
}
else{
    echo "Bir sorun var ve bu sorunu merak ettiysen kodlara bak!";
}


?>

</body>
</html>

