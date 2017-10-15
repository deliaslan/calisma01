<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 13.10.2017
 * Time: 00:29
 * Project Name: calisma01
 * File Name: php08.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <body>
<!--
== eşit ise
!= eşit değil ise
< küçük ise
> büyük ise
<= küçük eşit ise
>= büyük eşit ise
-->
    <?php
    $say = 3;
    if($say == 5){
        echo "doğru";
    }
    elseif($say== 4){
        echo "doğru";
    }
    else{
        echo "yanlış";
    }
    ?>
</body>
</html>
