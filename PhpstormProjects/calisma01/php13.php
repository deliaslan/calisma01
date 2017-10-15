<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 16.10.2017
 * Time: 00:21
 * Project Name: calisma01
 * File Name: php13.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>For döngüsü, Listbox kullanımı</title>
</head>
    <body>
    <?php
    /*
     * Döngüler for döngüsü
     * $i0; => başlangıç değerini
     * $i < ; => koşulu
     * $i++; değerin birer birer artmasını
    */

    for($i=0;$i<=10;$i++){

        echo $i; ?>. sayı  Sayı : <?php

        echo $i;
        echo "<br>";

    }


    //Açılır liste kutusuna il plakalarını ekleme
    ?>
    <br>
    <hr>
    <form action="" method="post">

        İl Plakası Seçiniz : <select name="iller" id="">
            <?php
            for($i=1;$i<=81;$i++){
                ?>
                <option>
                    <?php
                    echo $i;
                    ?>
                </option>

            <?php
            }
            ?>



        </select>


    </form>
</body>
</html>

