<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 15.10.2017
 * Time: 23:44
 * Project Name: calisma01
 * File Name: php11.php
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
        Numara giriniz: <input type="number" max="5" name="deger" placeholder="Sayıyı Giriniz"><br>
        <input type="submit" name="gonder" value="Gönder">
    </form>

    <?php
    if(isset($_POST['gonder'])) {

        $puan = $_POST['deger'];

        switch ($puan) {
            case '5':
                echo "değer 5'tir.";
                break;
            case '4':
                echo "değer 4'tür";
                break;
            case '3':
                echo "değer 3'tür";
                break;
            case '2':
                echo "değer 2'dir";
                break;
            case '1':
                echo "değer 1'dir";
                break;
            default:
                echo "istenilen bir değer değildir.";
                break;
        }
    }
    else{
        echo "Bir sorun var ve bu sorunu merak ettiysen kodlara bak!";
    }


    ?>

</body>
</html>
