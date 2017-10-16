<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 16.10.2017
 * Time: 21:17
 * Project Name: calisma01
 * File Name: php23.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Fonksiyon var mı yok mu</title>
</head>
<body>
<?php
//Fonksiyon var mı yok mu - function_exists()

function func($degisken)
{
    return $degisken;
}


if (function_exists("func")) {
    echo "fonksiyon Var";
} else {
    echo "fonksiyon Yok";
}
?>

</body>
</html>
