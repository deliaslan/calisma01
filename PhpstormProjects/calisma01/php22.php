<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 16.10.2017
 * Time: 20:58
 * Project Name: calisma01
 * File Name: php22.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>RECURSIVE Kendini çağıran fonksiyon</title>
</head>
<body>
<?php
//Kendini çağıran fonksiyonlar(Recursive)
$sabit = 1;

function faktoriyel($a)
{
    global $sabit;
    if ($a > 1) {
        $sabit = $sabit * $a;
        $a--;
        faktoriyel($a);
    }

    return $sabit;
}

echo faktoriyel(5);


?>

</body>
</html>
